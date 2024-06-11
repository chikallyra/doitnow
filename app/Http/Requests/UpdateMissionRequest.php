<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required|min:5',
        'link' => 'nullable',
        'steps' => 'required|min:10',
        'description' => 'required|min:10',
        'max_missionary' => 'required|integer',
        'category_id' => 'required|exists:mission_categories,id',
        'existing_reward' => 'nullable|exists:rewards,id',
        'new_reward' => 'nullable|string|required_without:existing_reward',
        'day_start' => 'required|integer|min:1|max:31',
        'month_start' => 'required|integer|min:1|max:12',
        'year_start' => 'required|integer|min:2024|max:2026',
        'day_end' => 'required|integer|min:1|max:31',
        'month_end' => 'required|integer|min:1|max:12',
        'year_end' => 'required|integer|min:2024|max:2026'
        ];
    }
}
