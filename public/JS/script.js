class navBar{
    constructor(btnNavBar, navBarList, navBarLinks){
        this.btnNavBar = document.querySelector(btnNavBar);
        this.navBarList = document.querySelector(navBarList);
        this.navBarLinks = document.querySelectorAll(navBarLinks);
        this.body = document.querySelector("body");
        this.onClass = "on";

        this.handler = this.handler.bind(this);
    }

    linksAnimation(){
        this.navBarLinks.forEach((link, index) => {
            link.style.animation ? (link.style.animation = "") : (link.style.animation = `fadeAnim .5s ease forwards ${index/7+.3}s`);
        })
    }

    handler(){
        this.navBarList.classList.toggle(this.onClass);
        this.btnNavBar.classList.toggle(this.onClass);
        this.body.classList.toggle(this.onClass);
        this.linksAnimation();
    }

    includeClickEvent(){
        this.btnNavBar.addEventListener("click", this.handler);
    }

    init(){
        if(this.btnNavBar){
            this.includeClickEvent();
        }

        return this;
    }
}

const mobileNavBar = new navBar(
    "#button-menu",
    ".nav-base",
    ".nav-base .nav-list li"
);

mobileNavBar.init();

class modalScreen{
    constructor(images, texts, modalScreenBase, contentModalScreen, btnCloseModalScreen, MStext, MSimg, exampleText, exampleImg){
        this.images = document.querySelectorAll(images);
        this.texts = document.querySelectorAll(texts);

        this.modalScreenBase = document.querySelector(modalScreenBase);
        this.contentModalScreen = document.querySelector(contentModalScreen);
        this.btnCloseModalScreen = document.querySelector(btnCloseModalScreen);

        this.MStext = document.querySelector(MStext);
        this.MSimg = document.querySelector(MSimg);

        this.exampleText = exampleText;
        this.exampleImg = exampleImg;
        this.exampleAltImg = "Imagem exemplo";
        this.exampleTitleImg = "Imagem exemplo";

        this.statusModalScreen = this.statusModalScreen.bind(this);

        this.body = document.querySelector("body");
    }

    observeImages(){
        this.images.forEach((img, index) => {
            img.addEventListener("click", () => {
                this.statusModalScreen(this.texts[index].value, img.src);
            })
        });
    }

    observeStatus(){
        this.btnCloseModalScreen.addEventListener("click", this.statusModalScreen);
    }

    statusModalScreen(text, imgUrl){    
        this.MSdados(text, imgUrl);
        if(this.modalScreenBase.classList.contains('show')){
            this.contentModalScreen.classList.toggle("show");
            setTimeout(() => {
                this.modalScreenBase.classList.toggle("show");
            }, 500);
        }else{
            this.modalScreenBase.classList.toggle("show");
            setTimeout(() => {
                this.contentModalScreen.classList.toggle("show");
            }, 100);
        }
        this.body.classList.toggle("on");
    }

    MSdados(text, imgUrl){
        if(text != "undefined" && imgUrl != "undefined"){
            this.MStext.innerText = text;
            this.MSimg.src = imgUrl;
        }else{
            this.MStext.innerText = this.exampleText;
            this.MSimg.src = this.exampleImg;
        }

        this.MSimg.alt = this.exampleAltImg;
        this.MSimg.title = this.exampleAltImg;
    }
    
    init(){
        if(this.btnCloseModalScreen){
            this.observeStatus();
        }

        return this;
    }
}

const observable = new modalScreen(
    ".img-base > img",
    ".text-base > .image-description",
    "#modal-screen",
    "section#modal-screen > div#content-base",
    "#close-modalScreen",
    "#MS-text",
    "#MS-img",
    "Teste",
    "https://img.olhardigital.com.br/wp-content/uploads/2018/09/20180903133856-860x450.jpg"
);

observable.observeImages();
observable.init();


