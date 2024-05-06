<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class StoreJobApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $jobId = $this->route('job');

        return [
            'fullname' => 'required|unique:job_applications,fullname,NULL,uuid,vaccancy_id,' . $jobId,
            'email' => 'required|email|unique:job_applications,email,NULL,uuid,vaccancy_id,' . $jobId,
            'phone' => 'required|unique:job_applications,phone,NULL,uuid,vaccancy_id,' . $jobId,
            'cv' => 'required|mimes:pdf,doc,docx',
            'location' => 'required',
            'country' => 'required',
            'right_to_work' => 'required',
            'dl' => 'required',
            'g-recaptcha-response' => ['required', new Recaptcha],
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'fullname.required' => 'Please enter your full name.',
            'fullname.unique' => 'We already have a record with this full name for this job listing.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email has already been used to apply for this job listing.',
            'phone.required' => 'Please enter your phone number.',
            'phone.unique' => 'This phone number has already been used to apply for this job listing.',
            'cv.required' => 'Please upload your CV.',
            'location.required' => 'Please enter your location/town.',
            'country.required' => 'Please select your country.',
            'right_to_work.required' => 'Please indicate if you have the right to work.',
            'dl.required' => 'Please indicate if you have a driver\'s license.',
        ];
    }
}
