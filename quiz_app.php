<?php
$questions=[ 
    ["question"=>"What is 2 + 2", "correct"=>"4"],
    ["question"=>"What is the capital of France?", "correct"=>"Paris"],
    ["question"=>"Who wrote \"Hamlet\"?", "correct"=>"Shakespeare"],
];

/* define("QUESTIONS",[ 
["question"=>"What is 2 + 2", "correct"=>"4"],
["question"=>"What is the capital of Franch?", "correct"=>"Paris"],
["question"=>"Who wrote \"Hamlet\"?", "correct"=>"Shakespeare"],
]); */

function evaluateQuiz(array $questions, array $answers): int{
    $score = 0;
    // $results = [];
    foreach ( $questions as $index => $question){
       if(strtolower(trim($answers[$index])) === strtolower(trim($question['correct'])))
        {
            $score++;
        }
    /*     $isCorrect = strtolower(trim($answers[$index])) === strtolower(trim($question['correct']));
        if ($isCorrect) {
            $score++;
        }
        $results[]=[
         'question'=>$question['question'],
         'correct_answer'=>$question['correct'],
         'your_answer'=> $answers[$index],  
         'isCorrect'=>$isCorrect
        ]; */
    }
    return $score;
    // return ['score' => $score, 'results'=>$results];
}

$answers=[];
foreach( $questions as $index=>$question){
    echo ($index+1). " . " . $question['question']. "\n";
    $answers[]= trim(readline("Your Answer: ")); 
}
$score = evaluateQuiz($questions, $answers);
// $score = $evaluation['score'];
// $results = $evaluation['results'];
 
$totalQuestions= count($questions);
echo "\n You scored $score out of $totalQuestions.\n";

if($score === $totalQuestions){
    echo "Exellent Job! \n";
}elseif($score > $totalQuestions/2){
    echo " Good effort!\n";
}else{
    echo "Better luck next time! \n";
}

/* echo "\nFeedback:\n";
foreach ($results as $index => $result) {
    echo ($index + 1) . ". " . $result['question'] . "\n";
    echo "   Correct Answer: " . $result['correct_answer'] . "\n";
    echo "   Your Answer: " . $result['your_answer'] . "\n";
    echo $result['isCorrect'] ? "   Status: Correct\n" : "   Status: Incorrect\n";
    echo "\n";
} */
?>