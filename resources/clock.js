/**
If you don't want any user interaction
you can use the setInterval()
function which repeatedly executes the supplied code.
If we wanted to make a game, we could use keyboard
or mouse events to control the animation
and use setTimeout(). By setting EventListeners,
we catch any user interaction and execute
our animation functions.
Mozilla canvas practises
*/
function clock(){
  let now = new Date();
  let ctx = document.getElementById('canvas').getContext('2d');
  ctx.save()
  ctx.clearRect(0,0,50,50)
  ctx.translate(25,25)
  ctx.scale(0.4,0.4)
  ctx.rotate(-Math.PI/2)
  ctx.strokeStyle= 'goldenrod'
  ctx.fillStyle = 'black'
  ctx.lineWidth = 2.7
  ctx.lineCap = 'round'

  //hour marks
  ctx.save()
  for(let i = 0; i < 12; i++){
    ctx.beginPath()
    ctx.rotate(Math.PI / 6)
    ctx.moveTo(33,0)
    ctx.lineTo(40,0)
    ctx.stroke()
  }
  ctx.restore()

  //Minute marks
  ctx.save()
  ctx.lineWidth = 1.8
  for(let i = 0; i < 60; i++){
    if (i % 5 != 0) {
      ctx.beginPath()
      ctx.moveTo(38,0)
      ctx.lineTo(40,0)
      ctx.stroke()
    }
    ctx.rotate(Math.PI/30)
  }
  ctx.restore()

  let sec = now.getSeconds()
  let min = now.getMinutes()
  let hr = now.getHours()
  hr = hr >= 12 ? hr - 12 : hr;

  ctx.fillStyle = 'black'

  //write getHours
  ctx.save()
  ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec)
  ctx.lineWidth = 4;
  ctx.beginPath()
  ctx.moveTo(-6.2,0)
  ctx.lineTo(26,0)
  ctx.stroke()
  ctx.restore()

  //writeminutes
  ctx.save()
  ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);
  ctx.lineWidth = 3.3;
  ctx.beginPath()
  ctx.moveTo(-9,0)
  ctx.lineTo(37,0)
  ctx.stroke()
  ctx.restore()

  // Write seconds
  ctx.save();
  ctx.rotate(sec * Math.PI / 30);
  ctx.strokeStyle = '#D40000';
  ctx.fillStyle = '#D40000';
  ctx.lineWidth = 2;
  ctx.beginPath();
  ctx.moveTo(-10, 0);
  ctx.lineTo(27, 0);
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, 3.3, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.beginPath();
  ctx.arc(31, 0, 3.3, 0, Math.PI * 2, true);
  ctx.stroke();
  ctx.fillStyle = 'rgba(0, 0, 0, 0)';
  ctx.arc(0, 0, 1, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.restore();

  ctx.beginPath();
  ctx.lineWidth = 4;
  ctx.strokeStyle = 'gold';
  ctx.arc(0, 0, 43, 0, Math.PI * 2, true);
  ctx.stroke();

  ctx.restore();

  window.requestAnimationFrame(clock);
}

window.requestAnimationFrame(clock);
