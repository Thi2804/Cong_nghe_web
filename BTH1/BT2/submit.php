<?php
$totalQuestions = 0;
$correctAnswers = 0;

echo "<h1>Kết quả bài thi</h1>";

foreach ($_POST as $key => $value) {
    // Kiểm tra các câu trả lời đã được nộp
    if (strpos($key, 'question-') === 0) {
        $index = str_replace('question-', '', $key);
        $userAnswer = $value;
        $correctAnswer = $_POST["answer-$index"];

        echo "<p><strong>Câu hỏi " . ($index + 1) . ":</strong><br>";
        echo "Câu trả lời của bạn: $userAnswer<br>";
        echo "Đáp án đúng: $correctAnswer<br>";

        $totalQuestions++;
        if ($userAnswer === $correctAnswer) {
            echo "<span style='color: green;'>Đúng</span></p>";
            $correctAnswers++;
        } else {
            echo "<span style='color: red;'>Sai</span></p>";
        }
    }
}

// Tính điểm
$score = ($correctAnswers / $totalQuestions) * 100;

echo "<h2>Điểm số của bạn: $correctAnswers / $totalQuestions ($score%)</h2>";
?>
