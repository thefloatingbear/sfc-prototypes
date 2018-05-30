<?php

namespace App\Http\Resources;

use App\WorkerQuestionAnswer;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionAnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $answer = $this->answer;
        if(empty($answer))
        {
            $answer = new WorkerQuestionAnswer();
            $answer->id = null;
            $answer->answer = null;
        }

        return [
            'id' => $this->id,
            'number' => $this->number,
            'question' => $this->question,
            'help_text' => $this->help_text,
            'field' => $this->field,
            'field_type' => $this->field_type,
            'order' => $this->order,
            'options' => $this->options,
            'error' => null,
            'selected' => false,
            'done' => false,
            'answer' => new AnswerResource($answer)
        ];
    }
}
