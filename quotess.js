function start(){
    var quotes=[
    {
        quote: "Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible.",
        name:"Francis of Assisi"
    },
    {
        quote:"Believe you can and you're halfway there.",
        name:"Theodore Roosevelt"
    },
    {
        quote:"It does not matter how slowly you go as long as you do not stop.",
        name:"Confucius"
    },
    {
        quote:"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.",
        name:"Thomas A. Edison"
    },
    {
        quote:"The will to win, the desire to succeed, the urge to reach your full potential... these are the keys that will unlock the door to personal excellence.",
        name:"Confucius"
    },
    {
        quote:"Don't watch the clock; do what it does. Keep going.",
        name:"Sam Levenson"
    },
    {
        quote:"A creative man is motivated by the desire to achieve, not by the desire to beat others.",
        name:"Ayn Rand"
    },
    {
        quote:"A creative man is motivated by the desire to achieve, not by the desire to beat others.",
        name:"Ayn Rand"
    },
    {
        quote:"Expect problems and eat them for breakfast.",
        name:"Alfred A. Montapert"
    },
    {
        quote:"Start where you are. Use what you have. Do what you can.",
        name:"Arthur Ashe"
    },
    {
        quote:"Be yourself; everyone else is already taken.",
        name:"Oscar Wilde"
    }

];
    var x = document.getElementById("quoteBox");
    x.style.display = "block";
    var number = Math.round(Math.random()*10);
    var quote = quotes[number].quote;
    var author = quotes[number].name;
    document.getElementById("quotes").innerHTML = quote;
    document.getElementById("author").innerHTML = "- "+author;
}
