<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$seoData = [

/* ================= HOME ================= */

"index.php" => [
"title" => "Neev – Step Into Success | Best Coaching for Class 6 to 10 in Noida",
"description" => "Neev – Step Into Success provides expert coaching for students from Class 6 to 10 with concept-based learning, small batch sizes, and regular test series.",
"keywords" => "Neev coaching, class 6 coaching, class 7 coaching, class 8 coaching, class 9 coaching, class 10 coaching Noida",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= ABOUT ================= */

"about-us.php" => [
"title" => "About Neev – Step Into Success | Coaching for Class 6 to 10",
"description" => "Learn about Neev – Step Into Success, our experienced faculty, concept-based teaching methods, and dedication to building strong academic foundations.",
"keywords" => "about neev coaching, class 6 to 10 coaching institute, best coaching center",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CLASS 6 ================= */

"class-six.php" => [
"title" => "Class 6 Coaching Classes | Neev – Step Into Success",
"description" => "Foundation coaching for Class 6 students with focus on Mathematics, Science, and English through concept clarity and regular practice.",
"keywords" => "class 6 coaching, class 6 tuition, maths science coaching class 6",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CLASS 7 ================= */

"class-seven.php" => [
"title" => "Class 7 Coaching Classes | Neev – Step Into Success",
"description" => "Concept-based coaching for Class 7 students with structured learning, worksheets, and weekly assessments.",
"keywords" => "class 7 coaching, class 7 tuition classes, maths science coaching class 7",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CLASS 8 ================= */

"class-eight.php" => [
"title" => "Class 8 Coaching Classes | Neev – Step Into Success",
"description" => "Advanced learning program for Class 8 students focusing on Mathematics, Science, and English with regular tests and assignments.",
"keywords" => "class 8 coaching, class 8 tuition classes, maths science coaching class 8",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CLASS 9 ================= */

"class-nine.php" => [
"title" => "Class 9 Coaching Classes | Neev – Step Into Success",
"description" => "Comprehensive coaching for Class 9 students with concept clarity, structured study materials, and exam preparation support.",
"keywords" => "class 9 coaching, class 9 tuition classes, maths science coaching class 9",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CLASS 10 ================= */

"class-ten.php" => [
"title" => "Class 10 Board Preparation Coaching | Neev – Step Into Success",
"description" => "Expert board exam preparation for Class 10 students with test series, revision sessions, and concept-based learning.",
"keywords" => "class 10 coaching, class 10 board preparation, maths science coaching class 10",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= BLOG ================= */

"blog.php" => [
"title" => "Education Blog | Study Tips & Exam Preparation | Neev Coaching",
"description" => "Read useful study tips, exam preparation strategies, and academic guidance for students from Class 6 to 10.",
"keywords" => "study tips blog, exam preparation tips, student learning blog",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= GALLERY ================= */

"gallery.php" => [
"title" => "Gallery | Neev – Step Into Success Coaching",
"description" => "Explore our classroom environment, student activities, and learning sessions at Neev Coaching Institute.",
"keywords" => "coaching institute gallery, classroom photos, coaching center activities",
"canonical" => "",
"robots" => "index, follow"
],

/* ================= CONTACT ================= */

"contact-us.php" => [
"title" => "Contact Neev Coaching | Admission Enquiry for Class 6 to 10",
"description" => "Contact Neev – Step Into Success to enquire about admissions, batches, and coaching for Class 6 to 10 students.",
"keywords" => "contact coaching institute, admission enquiry, class 6 to 10 coaching contact",
"canonical" => "",
"robots" => "index, follow"
]

];


/* ================= DEFAULT META ================= */

$defaultMeta = [
"title" => "Neev – Step Into Success | Coaching for Class 6 to 10",
"description" => "Neev Coaching provides concept-based learning, test series, and experienced faculty for students from Class 6 to 10.",
"keywords" => "Neev coaching institute",
"canonical" => "",
"robots" => "index, follow"
];

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>