<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\CategoryA;
use App\Models\QuestionA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class LevelAController extends Controller
{
    public function index()
    {
        return view('admin.level.level-a-index');
    }

    public function categoriesIndex()
    {
        $categories = CategoryA::all();

        $categoriesWithCount = $categories->map(function ($category) {
            $count = QuestionA::where('category_a_id', $category->id)->count();
            return [
                'id' => $category->id,
                'name' => $category->name,
                'description' => $category->description,
                'question_count' => $count ?? 'null, data not found'
            ];
        });

        return view('admin.categories.categories-a-index', [
            'categoriesA' => $categoriesWithCount ?? 'null, data not found'
        ]);
    }

    public function categoriesEdit(string $id)
    {
        $categoriesBaseID = CategoryA::find($id);

        if (!$categoriesBaseID) {
            return redirect()->route('admin.categories.a.index')->with('error', 'Data kategori A tidak ditemukan.');
        }
        return view('admin.categories.categories-a-edit', [
            'title' => 'Edit Categories A',
            'category' => $categoriesBaseID
        ]);
    }

    public function categoriesShow(string $id)
    {
        return view('admin.categories.categories-a-show');
    }

    public function categoriesUpdate(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $categoriesBaseID = CategoryA::find($id);

            if (!$categoriesBaseID) {
                Log::warning('Category update failed: Category A with ID ' . $id . ' not found');
                return redirect()->route('admin.categories.a.index')
                    ->with('error', 'Data kategori A tidak ditemukan.');
            }

            $categoriesBaseID->update($validated);

            Log::info('Category A with ID ' . $id . ' has been updated successfully by user ' . auth()->user()->id);

            return redirect()->route('admin.categories.a.index')
                ->with('success', 'Data kategori A berhasil diubah.');
                
        } catch (ValidationException $e) {
            Log::error('Category update validation failed: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Category update failed with exception: ' . $e->getMessage());
            return redirect()->route('admin.categories.a.index')
                ->with('error', 'Terjadi kesalahan saat mengubah data kategori A. Silakan coba lagi.');
        }
    }

    public function bankSoalIndex() {
        return view('admin.questions.bankSoalIndex', [
            'title' => 'Bank Soal Level A'
        ]);
    }
}