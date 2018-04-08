var app = new Vue({
    el: '#chat',
    data: {
        messages: [
        ],
        newMessageUsername: "",
        newMessageText: "",
    },
    methods: {
        sendMessage: function(){
            var newStuffToAdd = {
                username: this.newMessageUsername, // Peteris
                text: this.newMessageText, // some text
                date: new Date()
            }
            
            this.messages.push(newStuffToAdd);
            this.newMessageText = '';
        }
    }
});
$('#tabs').tabs();

    $('.bildes a').fancybox();
    $('.sliderss a').fancybox();

