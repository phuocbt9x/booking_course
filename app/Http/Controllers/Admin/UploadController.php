<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    public function handle(Request $request): JsonResponse
    {
        return $this->uploadFile($request, 'upload', 'upload');
    }

    public function uploadTempFile(Request $request): JsonResponse
    {
        $inputName = $request->file() ? array_key_first($request->file()) : null;

        if (!$inputName) {
            return $this->errorResponse("No file found in request.");
        }

        return $this->uploadFile($request, $inputName, 'tmp');
    }

    private function uploadFile(Request $request, string $inputName, string $disk): JsonResponse
    {
        if (!$request->hasFile($inputName)) {
            return $this->errorResponse("No file uploaded.");
        }

        $url = $this->storeFile($request->file($inputName), $disk);
        return $url ? $this->successResponse($url) : $this->errorResponse("File upload failed.");
    }

    private function storeFile(UploadedFile $file, string $disk): ?string
    {
        $filename = time() . '_' . $file->getClientOriginalName();

        $path = Storage::disk($disk)->putFileAs('', $file, $filename);

        return $path ? Storage::disk($disk)->url($path) : null;
    }

    private function errorResponse(string $message): JsonResponse
    {
        return response()->json([
            'uploaded' => false,
            'error' => ['message' => $message],
        ]);
    }

    private function successResponse(string $url): JsonResponse
    {
        return response()->json([
            'uploaded' => true,
            'url' => $url,
        ]);
    }
}
