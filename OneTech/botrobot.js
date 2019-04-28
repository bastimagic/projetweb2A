var trigger = [
    ["bonjour","salut","hello","hey"],
    ["comment vas tu", "ca va", "comment vas la vie"],
    ["que pourrais je acheter","quoi acheter", "j achete quoi"],
    ["trente dinar"],
    ["cinquante dinar"],
    ["quatre vingt dinar"],
    ["qui es tu"],
    ["es tu un bot"],
    ["es tu un humain ou un bot"],
    ["es tu humain"],
    ["qui tas cree", "qui tas fait"],
    ["je taime"],
    ["je vais bien"],
    ["je ne vais pas bien"],
    ["raconte moi une blague"],
    ["haha","hahahaha","hahaha","hahahahahaha","hahahahaha"],
    ["bye","au revoir","adieu"],
    ["comment pouvoir acheter"],
    ["daccord"],
    ["dis moi plus sur ce site","cest quoi ce site","vous vendez quoi"]

];
var reply = [
    ["Bonjour","Salut","Bienvenue"],
    ["Bien", "Très Bien, merci", "Fantastique"],
    ["Ça dépend de ton budget"],
    ["Tu peux prendre le sac classique"],
    ["Tu peux prendre le sac classique ou le sac revisité"],
    ["Tu peux prendre n'importe quel sac"],
    ["On m'appelle sousou"],
    ["Certains m'appellent comme ça, Oui"],
    ["Un bot"],
    ["Surement pas"],
    ["Baccouche Omar"],
    ["Je n'ai pas de sentiment, pardon", "J'aimerai ressentir la même chose, mais je ne peux pas"],
    ["Content de l'apprendre"],
    ["Pourquoi? il faut positiver dans la vie"],
    ["Nous n'avons pas le même humour, moi ce qui me fait rire, c'est les bits"],
    ["J'ai réussi à te faire rire askip"],
    ["Bye","Au revoir","A la prochaine"],
    ["En t'inscrivant"],
    ["J'espère t'avoir aidé"],
    ["C'est le site de vente en ligne de l'entreprise IDbureau, c'est une papetrie."]

];
var alternative = ["Hahahaha", "Eh"];
document.querySelector("#input").addEventListener("keypress", function(e){
    var key = e.which || e.keyCode;
    if(key === 13){ //Enter button
        var input = document.getElementById("input").value;
        document.getElementById("user").innerHTML = input;
        output(input);
    }
});
function output(input){
    try{
        var product = input + "=" + eval(input);
    } catch(e){
        var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and
        text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
        if(compare(trigger, reply, text)){
            var product = compare(trigger, reply, text);
        } else {
            var product = alternative[Math.floor(Math.random()*alternative.length)];
        }
    }
    document.getElementById("chatbot").innerHTML = product;
    speak(product);
    document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
    var item;
    for(var x=0; x<arr.length; x++){
        for(var y=0; y<array.length; y++){
            if(arr[x][y] == string){
                items = array[x];
                item =  items[Math.floor(Math.random()*items.length)];
            }
        }
    }
    return item;
}
function speak(string){
    var utterance = new SpeechSynthesisUtterance();
    utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
    utterance.text = string;
    utterance.lang = "en-US";
    utterance.volume = 1; //0-1 interval
    utterance.rate = 1;
    utterance.pitch = 2; //0-2 interval
    speechSynthesis.speak(utterance);
}
