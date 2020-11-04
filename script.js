const zmiana={
    bg: document.getElementById("left"),
    btn: document.getElementById("bgbtn"),

    btn1:function(){
        this.bg.className = "left1";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(zmiana));
    },
}
zmiana.init();

const zmiana1={
    bg: document.getElementById("left"),
    btn: document.getElementById("bgbtn1"),

    btn1:function(){
        this.bg.className = "left2";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(zmiana1));
    },
}
zmiana1.init();