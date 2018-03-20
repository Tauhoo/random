console.log('on');
console.log($('.item-container').css('background-color'));

const remove = ()=>{
  $('.reward').remove()
  $('.reward-background').remove()
}

$('.reward').click(remove)

$('.reward-background').click(remove)

$('.item-container').css('left','-11vw')

rouletteSlide(190)

function rouletteSlide(target) {
  const element = $('.item-container')
  const distance = 17*(target-2)+'vw'
  const start = () => {
    element.animate({ left: '-='+distance },10000,'swing',()=>{
      setTimeout(()=>{
        $('.reward').fadeIn()
        $('.reward-background').fadeIn()
      },600)
    })
  }
  $('.line').animate({ width: '7px' },()=>{
    start()
  })
}
