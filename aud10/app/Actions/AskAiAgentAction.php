<?php

namespace App\Actions;
use App\Models\Subscription;
use OpenAI\Laravel\Facades\OpenAI;

class AskAiAgentAction
{
    public function handle(string $question):string{
        // @TODO: fetch Knowledgebase

        $subscriptions = Subscription::query()
            ->active()
            ->get();

        $input = 'I will send you a bunch of data which will be explained to you. Next time someone asks something please
        respond in a natural language. No need to mention any code, sql,etc... just plain natural language that
        the user will understand'.
        json_encode($subscriptions).'
        This is the question of the client, please provide answer in natural language'.$question;

        $response = OpenAI::responses()->create([
            'model' => 'gpt-5',
            'input' => $input,
        ]);

        return $response->outputText;
    }
}
