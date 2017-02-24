/**
 * Created by tripleheader on 2/24/17.
 */
var i=0;
var text;
function animateText() {

    text= document.getElementById('welcome_message').innerText;
    //animate the text
    //for (i = 0; i < text.length; i++) {
setMessageText();
    //}
}
function setMessageText() {
    if(i>=text.length){
        //setTimeout(setMessageText(text),1000);
        //setMessageText(text);
        i=0;
    }
    char=text[i];
    char=char.toUpperCase();
    document.getElementById('welcome_message').innerText=text.replaceAt(i, char);
    i++;
    setTimeout(setMessageText,300);
}
String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}


