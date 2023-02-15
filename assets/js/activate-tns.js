var slider = tns({
    container: ".slider",
    items: 1,
    slideBy: "page",
    autoplay: false,
    loop: false,
    controlsPosition: "bottom",
    nav: false,
    controlsText: ["&lt;", "&gt;"],
    responsive: {
        700: {
            items: 2,
        },
    },
});
