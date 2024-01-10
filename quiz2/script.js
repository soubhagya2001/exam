const questions = [
    {
        question: "Which animal is known as the 'Ship of the Desert'?",
        answers:[
            {text:"Elephant" , correct:false},
            {text:"Giraffe" , correct:false},
            {text:"Horse" , correct:false},
            {text:"Camel" , correct:true}
        ],
        ans: "ans4"
    },

    {
        question: "How many days are there in a week?",
        answers:[
            {text:"12" , correct:false},
            {text:"5" , correct:false},
            {text:"7" , correct:true},
            {text:"15" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: "Rainbow consist of how many colours?",
        answers:[
            {text:"11" , correct:false},
            {text:"16" , correct:false},
            {text:"7" , correct:true},
            {text:"4" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: "Baby frog is known as.......",
        answers:[
            {text:"Tadpole" , correct:true},
            {text:"Frogi" , correct:false},
            {text:"Mehndak" , correct:false},
            {text:"Mare" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "How many consonants are there in the English alphabet?",
        answers:[
            {text:"26" , correct:false},
            {text:"21" , correct:true},
            {text:"18" , correct:false},
            {text:"15" , correct:false}
        ],
        ans: "ans2"
    },

    {
        question: "Name the National bird of India?",
        answers:[
            {text:"Octopus" , correct:false},
            {text:"Crow" , correct:false},
            {text:"Peacock" , correct:true},
            {text:"Sparrow" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: "Name the National animal of India?",
        answers:[
            {text:"Crocodile" , correct:false},
            {text:"Lion" , correct:false},
            {text:"Rabbit" , correct:false},
            {text:"Tiger" , correct:true}
        ],
        ans: "ans4"
    },

    {
        question: "Name the National fruit of India?",
        answers:[
            {text:"Banana" , correct:false},
            {text:"Guava" , correct:false},
            {text:"Orange" , correct:false},
            {text:"Mango" , correct:true}
        ],
        ans: "ans4"
    },

    {
        question: "Name the National river of India?",
        answers:[
            {text:"Hoogly" , correct:false},
            {text:"Ganga" , correct:true},
            {text:"Yamuna" , correct:false},
            {text:"Saraswati" , correct:false}
        ],
        ans: "ans2"
    },

    {
        question: "How many continents are there in the world?",
        answers:[
            {text:"7" , correct:true},
            {text:"11" , correct:false},
            {text:"5" , correct:false},
            {text:"4" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "Which is the smallest month of the year?",
        answers:[
            {text:"March" , correct:false},
            {text:"May" , correct:false},
            {text:"February" , correct:true},
            {text:"December" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: "Sun rises in the.....",
        answers:[
            {text:"East" , correct:true},
            {text:"West" , correct:false},
            {text:"North" , correct:false},
            {text:"South" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "Name the largest planet of our Solar System?",
        answers:[
            {text:"Neptune" , correct:false},
            {text:"Mars" , correct:false},
            {text:"Jupiter" , correct:true},
            {text:"Earth" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: "Which festival is known as the festival of light?",
        answers:[
            {text:"Diwali" , correct:true},
            {text:"Holi" , correct:false},
            {text:"Christmas" , correct:false},
            {text:"Raksha Bandhan" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "Name a bird that lays the largest eggs?",
        answers:[
            {text:"Hen" , correct:false},
            {text:"Ostrich" , correct:true},
            {text:"Sparrow" , correct:false},
            {text:"Crow" , correct:false}
        ],
        ans: "ans2"
    },

    {
        question: "Name the planet known as the Red Planet?",
        answers:[
            {text:"Mars" , correct:true},
            {text:"Saturn" , correct:false},
            {text:"Uranus" , correct:false},
            {text:"Earth" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "Name the country known as the Land of the Rising Sun?",
        answers:[
            {text:"Pakistan" , correct:false},
            {text:"China" , correct:false},
            {text:"India" , correct:false},
            {text:"Japan" , correct:true}
        ],
        ans: "ans4"
    },

    {
        question: "How many millimetres are there in a centimetre?",
        answers:[
            {text:"10mm" , correct:true},
            {text:"100mm" , correct:false},
            {text:"1000mm" , correct:false},
            {text:"10000mm" , correct:false}
        ],
        ans: "ans1"
    },

    {
        question: "Name a shape that has ten sides?",
        answers:[
            {text:"Tenagon" , correct:false},
            {text:"Hexagon" , correct:false},
            {text:"Decagon" , correct:true},
            {text:"Nonagon" , correct:false}
        ],
        ans: "ans3"
    },

    {
        question: " Who is the Father of our Nation?",
        answers:[
            {text:"Subash Chandra Bose" , correct:false},
            {text:"Narendra Modi" , correct:false},
            {text:"APJ Abdul Kalam" , correct:false},
            {text:"Mahatma Gandi" , correct:true}
        ],
        ans: "ans4"
    },
];


const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');


let questionCount = 0;
let score = 0;

const loadQuestion = () => {
    const questionList = questions[questionCount];
    question.innerHTML = questionList.question;
    option1.innerHTML = questionList.answers[0].text;
    option2.innerHTML = questionList.answers[1].text;
    option3.innerHTML = questionList.answers[2].text;
    option4.innerHTML = questionList.answers[3].text;

}

loadQuestion();


const showScore = document.querySelector('#showScore');

const answers = document.querySelectorAll('.answer');
const getCheckAnswer = ()=>{
    let answer;

    answers.forEach((curAnsElem) => {
        if(curAnsElem.checked){
            answer = curAnsElem.id;
        }
    }
    )
    return answer;
}

const deselectAll = ()=>{
    answers.forEach((curAnsElem) => {
        curAnsElem.checked = false;
    });
}

submit.addEventListener('click', () => {
    const checkedAnswer = getCheckAnswer();
    console.log(checkedAnswer);

    if(checkedAnswer === questions[questionCount].ans){
        score++;
    }

    questionCount++;
    deselectAll();
    if(questionCount<questions.length){
        loadQuestion();
    }else{
        showScore.innerHTML = `<h3>You Scored ${score}/${questions.length}</h3><br><button class="btn" onclick="location.reload();">Play Again</button>`;

        showScore.classList.remove('scoreArea');
    }
});