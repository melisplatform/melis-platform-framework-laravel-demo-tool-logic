<?php
namespace MelisPlatformFrameworkLaravelDemoToolLogic\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Lang;
use MelisPlatformFrameworkLaravelDemoToolLogic\Model\Album;

class AlbumRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'alb_name' => 'required',
            'alb_song_num' => 'required|integer',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'alb_name.required' => Lang::get('laravelDemoTool::messages.alb_name_required'),
            'alb_song_num.required' => Lang::get('laravelDemoTool::messages.alb_song_num_required'),
            'alb_song_num.integer' => Lang::get('laravelDemoTool::messages.alb_song_num_integer'),
        ];
    }

    /**
     * Modifying error message before sending back to Front
     *
     * @param Validator $validator
     */
    public function failedValidation(Validator $validator)
    {
        $errors = [];

        /**
         * Modifying errors before sending back to the fron
         * This is for front side the will handle the errors
         * of the js helper
         */
        foreach ($validator->errors()->getMessages() As $key => $err){
            // Adding "label" on each item
            $errors[$key]['label'] = Lang::get('laravelDemoTool::messages.'.$key.'_text');
            foreach ($err As $ek => $er)
                $errors[$key]['err_'.++$ek] = $er;
        }

        // Save action to logs
        $albumId = request()->route('id') ?? null;
        $logType = (!$albumId) ? Album::ADD : Album::UPDATE;

        $title = Lang::get('laravelDemoTool::messages.album');
        $message = Lang::get('laravelDemoTool::messages.'.strtolower($logType).'_failed');

        // Album Model
        $album = new Album();
        $album->logAction(false, $title, $message, $logType, $albumId);

        $jsonResponse = [
            'success' => 0, // Flag trigger on front side that error occurred
            'errors' => $errors,
            'title' => $title,
            'message' => $message,
        ];

        throw new HttpResponseException(response()->json($jsonResponse, 200));
    }
}