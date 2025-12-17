<?php

namespace App\Http\Controllers;

use App\Actions\AskAiAgentAction;
use Illuminate\Http\Request;

class AiAgentController extends Controller
{
    /**
     * @throws \Exception
     */
    public function ask(Request $request){
        $question = $request->input('question');
        $answer = app(AskAiAgentAction::class)->handle($question);

        return response()->json($answer);
    }
}
