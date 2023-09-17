const button = $('#btn')
const overlay = $('#overlay')

const close = $('#close')
const body = $('body')
button.on('click', () => {
    overlay.removeClass('visually-hidden');
})

close.on('click', () => {
    overlay.addClass('visually-hidden');
})



const continue1 = $('#continue1')
const box1 = $('#box1')
const box2 = $('#box2')
const close1 = $('#close1')

continue1.on('click', () => {
    box1.addClass('visually-hidden');
    box2.removeClass('visually-hidden');
})

close1.on('click', () => {
    box2.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})


const continue2 = $('#continue2')
const box3 = $('#box3')
const close2 = $('#close2')

continue2.on('click', () => {
    box2.addClass('visually-hidden');
    box3.removeClass('visually-hidden');
})

close2.on('click', () => {
    box3.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})



const continue3 = $('#continue3')
const box4 = $('#box4')
const close3 = $('#close3')

continue3.on('click', () => {
    box3.addClass('visually-hidden');
    box4.removeClass('visually-hidden');
})

close3.on('click', () => {
    box4.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})