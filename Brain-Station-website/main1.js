let btn = document.getElementById('btn');
let output = document.getElementById('output');
let quotes = [
'Nothing is impossible, the word itself says "Im possible"! -- Audrey Hepburn',
"Whether you think you can or you think you can't, you're right. -- Henry Ford",
"Perfection is not attainable, but if we chase perfection we can catch excellence. -- Vince Lombardi",
"Life is 10 percent what happens to me and 90 percent of how I react to it. -- Charles Swindoll",
"None of us is as smart as all of us. -- Ken Blanchard",
"I can't change the direction of the wind, but I can adjust my sails to always reach my destination. -- Jimmy Dean",
"Believe you can and you're halfway there. -- Theodore Roosevelt",
"To handle yourself, use your head; to handle others, use your heart. -- Eleanor Roosevelt",
"Too many of us are not living our dreams because we are living our fears. -- Les Brown",
"Alone, we can do so little; together we can do so much. -- Helen Keller",
"Whatever the mind of man can conceive and believe, it can achieve. -- Napoleon Hill",
"Strive not to be a success, but rather to be of value. -- Albert Einstein",
"I am not a product of my circumstances. I am a product of my decisions. -- Stephen Covey",
"The most common way people give up their power is by thinking they don't have any. -- Alice Walker",
"The most difficult thing is the decision to act, the rest is merely tenacity. -- Amelia Earhart",
"Don't judge each day by the harvest you reap but by the seeds that you plant. -- Robert Louis Stevenson",
"The real opportunity for success lies within the person and not in the job. -- Zig Ziglar",
"Change your thoughts and you change your world. -- Norman Vincent Peale",
"Be not afraid of life. Believe that life is worth living, and your belief will help create the fact. -- William James",
"Build your own dreams, or someone else will hire you to build theirs. -- Farrah Gray",
"Remember that not getting what you want is sometimes a wonderful stroke of luck. -- Dalai Lama",
"You can't use up creativity. The more you use, the more you have. -- Maya Angelou",
"I have learned over the years that when one's mind is made up, this diminishes fear. -- Rosa Parks",
"I would rather die of passion than of boredom. -- Vincent van Gogh",
"A truly rich man is one whose children run into his arms when his hands are empty. -- Unknown",
"A person who never made a mistake never tried anything new. -- Albert Einstein"

];

btn.addEventListener('click',function(){
	var randomQuote = quotes[Math.floor(Math.random()*quotes.length)]
	output.innerHTML = randomQuote;
})

let colors = ['orange','white','LightCyan','PeachPuff']
let content = document.getElementById('cont');
let out = document.getElementById('output');

let cbtn1 = document.getElementById('butn1')
cbtn1.addEventListener('click',function(){
content.style.background = colors[0];
out.style.color = "white";
out.style.fontFamily = "Century Gothic";
out.style.fontSize = "30px";
content.style.borderColor = "black";
})


let cbtn2 = document.getElementById('butn2')
cbtn2.addEventListener('click',function(){
content.style.background = colors[1];
out.style.color = "black";
out.style.fontFamily = "Impact ";
out.style.fontSize = "20px";
content.style.borderColor = "Fuchsia" ;
})


let cbtn3 = document.getElementById('butn3')
cbtn3.addEventListener('click',function(){
content.style.background = colors[2];
out.style.color = "Navy";
out.style.fontFamily = "Courier New ";
out.style.fontSize = "25px";
content.style.borderColor = "PaleGreen" ;
})


let cbtn4 = document.getElementById('butn4')
cbtn4.addEventListener('click',function(){
content.style.background = colors[3];
out.style.color = "Sienna";
out.style.fontFamily = "Brush Script MT ";
out.style.fontSize = "40px";
content.style.borderColor = "Sienna" ;
})