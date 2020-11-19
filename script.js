const zmiana={
    bg: document.getElementById("left"),
    headik: document.getElementById("headik"),
    head: document.getElementById("head"),
    main: document.getElementById("main"),
    btn: document.getElementById("bgbtn"),

    btn1:function(){
        this.bg.className = "left1";
        this.headik.className = "headik1";
        this.head.className = "head1";
        this.main.className = "main1";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(zmiana));
    },
}
zmiana.init();

const zmiana1={
    bg: document.getElementById("left"),
    headik: document.getElementById("headik"),
    head: document.getElementById("head"),
    main: document.getElementById("main"),
    btn: document.getElementById("bgbtn1"),

    btn1:function(){
        this.bg.className = "left2";
        this.headik.className = "headik2";
        this.head.className = "head2";
        this.main.className = "main2";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(zmiana1));
    },
}
zmiana1.init();

const zmiana1={
    data: document.getElementById("data"),

    btn1:function(){
        this.data.className = "data";
    },

    // init:function(){
    //     this.btn.addEventListener('click',this.btn1.bind(zmiana1));
    // },
}
zmiana1.init();