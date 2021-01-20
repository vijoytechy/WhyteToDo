


gsap.from(".card", {
    opacity: 0,
    y: 100,
    duration: 1
});






var el = $(".btn-outline-danger");

$(el).each(function () {
    $(this).click(function () {
        TweenLite.to(this, .25, { x: 200 })
        window.setTimeout(function () {
            this.remove();
        }.bind(this), 1000);
    })
})
