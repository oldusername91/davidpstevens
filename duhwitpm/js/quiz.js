/*!
 * Author: David Stevens
 * Quiz for "Have you got what it takes to be Prime Minister website"
 */

                                               
var i = 0; //count increment
//array of answers
var answers = ["Australia's head of state",
               "Studied at University",
               "Joining a political party",
               "False",
               "False",
               "Have the support of important people",
               "True",
               "False", 
               "Make sure you go on morning walks everyday",
               "Is entitled to free jet travel for life"
               ];
//question and multiple choice answers.
var qanda = [["Which of the following is NOT one of the Prime Minister's Roles",
              answers[0],
              "Leader of the Government",
              "Head of Cabinet",
              "Head of the National Security Committee"],
            ["Most of Australia's Prime Minister's did what after school?",
             "Joined the military",
             "Became tradesmen",
             "Sat at home waiting for their time",
             answers[1]],
             ["What step comes first when becoming a Member of Parliament?",
              "Studying a law degree",
              answers[2],
              "Running the university newspaper",
              "Joining a trade union"],
             ["Higher Education is essential if you want to be PM",
              "True",
              answers[3]],
             ["Only one of the major parties have youth movements",
              "True",
              answers[4]],
             ["To become the leader of a political party you have to:",
              "Host lots of dinner parties",
              "Keep all your promises",
              answers[5],
              "Clean your teeth everyday" ],
             ["A Prime Minister can win or lose a Federal election",
              answers[6],
              "False"],
             ["Once a PM loses an election, he is automatically kicked out of parliament",
              "True",
              answers[7]],
             ["Which of these is NOT part of a succesful election campaign",
              "Touring electorates around Australia",
              "Appearing on TV, radio and newspapers",
              answers[8],
              "Debate your opposition"],
             ["Which of these is not true? The Prime Minister",
               "Has a salary of around $500,000 a year",
               "Receives a pension for the rest of their life",
               answers[9],
              "May become an ambassador for Australia"]];
var userAns = [];//empty array for site users answers
var answer; //variable to store selected answer
var correct =0; //count of correctly selected answers

/* this function populates the innerquiz div with the answers from qanda array.
when called again it increments i and loads the next set of questions and answers
*/
function loadQuestion(){
    
    n=i+1; //n is the question number i starts at 0, n has to start at 1
    if (qanda[i][3] == null)
    //check array to see if a true or false question. HTML code will be different if it is multiple choice
    { 
        $('.innerquiz').html("<h2 class='questa'>Question "+ n +"\
        </h2><p class='questa'>True or False:</p><h3 class='questa'>" + qanda[i][0] + "</h3>\
        <div class='correctbar'></div>\
        <ul>\
        <li><button class ='buts'>" + qanda[i][1] + "</button></li>\
        <li><button class ='buts'>" + qanda[i][2] + "</button></li>\
        </ul>\
        <div class='correctAnswer'></div>\
        <button id='nxtb' class='nxtbtnn'>Next Question</button>");
        var buttons = $('.buts');//variable for buttons
        var nxt = $('#nxtb')//variable for next btn
        nxt.hide(); //next button
        $('button').on("click",function(){
           checkAnswer($(this).text());
        });
        $('button').on("mouseover", function(){$(this).addClass("buttonAdjust");
                                                        });
        $('button').on("mouseout", function(){$(this).removeClass("buttonAdjust");
                                                       });
    }
    else
    //multiple choice question
    {   //select innerquiz div, and populate it with questions and answers
        $('.innerquiz').html("<h2 class='questa'>Question "+ n +"\
        </h2><p class='questa'>Select the Correct Answer:</p><h3 class='questa' id ='quest'>" + qanda[i][0] + "</h3>\
        <div class='correctbar'></div>\
        <ul>\
        <li><button class ='buts'><div class='buttonL'>a</div><p>" + qanda[i][1] + "</p></button></li>\
        <li><button class ='buts'><div class='buttonL'>b</div><p>" + qanda[i][2] + "</p></button></li>\
        <li><button class ='buts'><div class='buttonL'>c</div><p>" + qanda[i][3] + "</p></button></li>\
        <li><button class ='buts'><div class='buttonL'>d</div><p>" + qanda[i][4] + "</p></button></li>\
        </ul>\
        <div class='correctAnswer'></div>\
        <button id='nxtb' class='nxtbtnn'>Next Question</button>");
        var buttons = $('.buts');//variable for buttons
        var nxt = $('#nxtb')//variable for next btn
        nxt.hide(); //next button
    }

        $('button>').on("click",function(){
           checkAnswer($(this).text());
        });
        
        $('button').on("mouseover", function(){$(this).addClass("buttonAdjust"); //adds two event listeners so that buttons still react to mouseovers
                                                        });
        $('button').on("mouseout", function(){$(this).removeClass("buttonAdjust");
                                                       });
        
        
    
}
//this function checks if the user selected answer is correct. it then proceeds to provide user feedback whether they scored correctly or not.
function checkAnswer(answer){
    var buttons = $('.buts');//variable for buttons
    var nxt = $('#nxtb')//variable for next btn
     if(answer==answers[i]) //check user selected answer matches that in answers array
            {//if correct
                $('.correctbar').html("<i class='fa fa-check'></i><p>Correct Answer</p>");//update correctbar
                correct++;//increment correct variable
            }
            else
            {//if incorrect
                $('.correctbar').html("<i class='fa fa-ban'></i><p>Incorrect Answer</p>");//update correctbar
                $('.correctAnswer').html("<p><span>Correct answer was:</span> "+answers[i]+"</p>");  
            }
            i++; //increment question variable so that next question is loaded 
            $('.correctbar').show(); //show correct bar
            $('.questa').hide();//hide the answer paragraph
            buttons.hide(); //hide answer buttons
            if(i!=10)//if question variable is less than 10, that is there are more questions
            {
                nxt.show();//show next question button
                nxt.on("click",function(){//add event listener to nxtbtn to call loadQuestion for next quest
                    loadQuestion();
            }); 
            }
            else
            { //if no more questions
                nxt.html("You finished the quiz! Click to see result");//update nxt button text
                nxt.show();//show nxtbtn
                nxt.on("click",function(){//add event listeneer to nxt btn to call calculate score
                    calculateScore(correct);//call calculate score
                }); 
            }
               
            
}
//this function will show result box and message(depending on score) and dim the screen.
function calculateScore(correct){
    $('.darkOverlay').fadeIn();//dims screen
    $('.resultbox').fadeIn()//pop up for result score and message
    if(correct>5){//if score is above 5 congrats message shown
    $('.resultbox').html('<h3 id="welldone"> Congratulations!</h3><hr>\
        <p id="scorecard">You scored <span id="score"></span> out of 10!</p>\
        <p id="message">You are well on your way to becoming Prime Minster. Remember though this is just a guide but it contains some valuable information, if you set your goals and work hard you might make it one day!</p>\
        <div class="tryagain">Try Again</div>');
    }
    else{//if score is below 5 better luck next time message shown
        $('.resultbox').html('<h3 id="welldone"> Better Luck Next Time!</h3><hr>\
        <p id="scorecard">You scored <span id="score"></span> out of 10!</p>\
        <p id="message">You have a bit more to learn on your way to becoming Prime Minster. Remember though this is just a guide but it contains some valuable information, if you set your goals and work hard you might make it one day!</p>\
        <div class="tryagain">Try Again</div>');
    }
    $('#score').html(correct);//update score value in html
    $('.tryagain').on("mouseover", function(){$('.tryagain').addClass("hover");});//event listener for tryagain button so reacts to mouse over
    $('.tryagain').on("mouseout", function(){$('.tryagain').removeClass("hover");});//event listener for tryagain button so reacts to mouse out
    $('.tryagain').on("click",function(){//event listener for tryagain button so it resets the quiz
        $('.darkOverlay').hide(); //hide darkoverlay div
        $('.resultbox').hide();//hide resultbox div
        i=0; //reset variables
        correct=0;
        loadQuestion(); //call loadQuestion to reset quiz
    });   
}
    