<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::match(['get', 'post'], 'q1', function () {
    $questions = array("What is your favorite color?",
        "What time do you wake up in the morning?",
        "How do you greet people?",
        "Is this worth extra credit?",
        "What is just the best?");

    $options = array(
        array("Blue",
            "Green",
            "Red",
            "Laser Lemon",
            "#FFFFFF"),
        array("before 6",
            "6-7",
            "7-8",
            "8-9",
            "after 9"),
        array("Howdy",
            "Sup",
            "Hello, there",
            "Yo, dawg",
            "What's groovy",
            "Don't speak to me"),
        array("Yes",
            "No",
            "It's negative points, now"),
        array("Code",
            "Turtles",
            "Bread",
            "Sonic the Hedgehog <3",
            "Not this quiz",
            "Ethics discussions"),
    );
    return view('question', ["questions" => $questions[0], "options" => $options[0], "index" => 1]);
});

Route::match(['get', 'post'], 'q2', function () {
    $questions = array("What is your favorite color?",
        "What time do you wake up in the morning?",
        "How do you greet people?",
        "Is this worth extra credit?",
        "What is just the best?");

    $options = array(
        array("Blue",
            "Green",
            "Red",
            "Laser Lemon",
            "#FFFFFF"),
        array("before 6",
            "6-7",
            "7-8",
            "8-9",
            "after 9"),
        array("Howdy",
            "Sup",
            "Hello, there",
            "Yo, dawg",
            "What's groovy",
            "Don't speak to me"),
        array("Yes",
            "No",
            "It's negative points, now"),
        array("Code",
            "Turtles",
            "Bread",
            "Sonic the Hedgehog <3",
            "Not this quiz",
            "Ethics discussions"),
    );
    return view('question', ["questions" => $questions[1], "options" => $options[1], "index" => 2]);
});

Route::match(['get', 'post'], 'q3', function () {
    $questions = array("What is your favorite color?",
        "What time do you wake up in the morning?",
        "How do you greet people?",
        "Is this worth extra credit?",
        "What is just the best?");

    $options = array(
        array("Blue",
            "Green",
            "Red",
            "Laser Lemon",
            "#FFFFFF"),
        array("before 6",
            "6-7",
            "7-8",
            "8-9",
            "after 9"),
        array("Howdy",
            "Sup",
            "Hello, there",
            "Yo, dawg",
            "What's groovy",
            "Don't speak to me"),
        array("Yes",
            "No",
            "It's negative points, now"),
        array("Code",
            "Turtles",
            "Bread",
            "Sonic the Hedgehog <3",
            "Not this quiz",
            "Ethics discussions"),
    );
    return view('question', ["questions" => $questions[2], "options" => $options[2], "index" => 3]);
});

Route::match(['get', 'post'], 'q4', function () {
    $questions = array("What is your favorite color?",
        "What time do you wake up in the morning?",
        "How do you greet people?",
        "Is this worth extra credit?",
        "What is just the best?");

    $options = array(
        array("Blue",
            "Green",
            "Red",
            "Laser Lemon",
            "#FFFFFF"),
        array("before 6",
            "6-7",
            "7-8",
            "8-9",
            "after 9"),
        array("Howdy",
            "Sup",
            "Hello, there",
            "Yo, dawg",
            "What's groovy",
            "Don't speak to me"),
        array("Yes",
            "No",
            "It's negative points, now"),
        array("Code",
            "Turtles",
            "Bread",
            "Sonic the Hedgehog <3",
            "Not this quiz",
            "Ethics discussions"),
    );
    return view('question', ["questions" => $questions[3], "options" => $options[3], "index" => 4]);
});

Route::match(['get', 'post'], 'q5', function () {
    $questions = array("What is your favorite color?",
        "What time do you wake up in the morning?",
        "How do you greet people?",
        "Is this worth extra credit?",
        "What is just the best?");

    $options = array(
        array("Blue",
            "Green",
            "Red",
            "Laser Lemon",
            "#FFFFFF"),
        array("before 6",
            "6-7",
            "7-8",
            "8-9",
            "after 9"),
        array("Howdy",
            "Sup",
            "Hello, there",
            "Yo, dawg",
            "What's groovy",
            "Don't speak to me"),
        array("Yes",
            "No",
            "It's negative points, now"),
        array("Code",
            "Turtles",
            "Bread",
            "Sonic the Hedgehog <3",
            "Not this quiz",
            "Ethics discussions"),
    );
    return view('question', ["questions" => $questions[4], "options" => $options[4], "index" => 5]);
});

Route::match(['get', 'post'], 'results', function () {
    $bread = array(
        array("Flour",
            "https://nuts.com/images/auto/510x340/assets/d28a22925e87fd74.jpg",
            "The purest form, you are the original",
            ),
        array("Bagel",
            "https://www.recipegirl.com/wp-content/uploads/2018/02/Egg-in-a-Bagel-1.jpg",
            "The best bread there is, and you are the best",
        ),
        array("Pretzel",
            "https://cdn.cpnscdn.com/static.coupons.com/ext/kitchme/images/recipes/600x400/copycat-auntie-annes-soft-pretzels_34681.jpg",
            "Your answers are twisted",
        ),
        array("Pumpernickle",
            "https://www.breadmakermachines.com/wp-content/uploads/2017/05/pumpernickel-bread-featured.jpg",
            "What even is this quiz?",
        ),
        array("Multigrain",
            "https://cdn.shopify.com/s/files/1/0857/2360/products/HFBC-MultigrainPan-10.29.13_640x.jpg?v=1437930429",
            "Like eating birdfeed",
        ),
        array("Sourdough",
            "https://images.media-allrecipes.com/userphotos/560x315/5694090.jpg",
            "Leaves a sour taste in your mouth",
        ),
        array("Baguette",
            "https://imgp2.schaer.com/sites/default/files/styles/header/public/1998_Baguette%20Casera.jpg?itok=3HIGFblE",
            "Zut alors! Oui oui!",
        ),
    );
    return view('results', ["bread" => $bread[rand(0, 6)]]);
});