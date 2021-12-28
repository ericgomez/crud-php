const XHR = new XMLHttpRequest() // create a new XHR object

XHR.open('GET', 'page.html', true)
XHR.send()

XHR.onreadystatechange = function () {
  if (this.readyState === 4 && this.status === 200) {
    console.log(this.responseText)
  }
}

// innerHTML

// Send data for method POST
const btn = document.getElementById('btn_1')
const input = document.getElementById('search')

// Implementing the event with the event click.
btn.onclick = function () {
  const info = input.value

  const XHR = new XMLHttpRequest() // create a new XHR object

  XHR.open('POST', 'page.html', true)
  XML.setRequestHeader('Content-type', 'application/json')
  XHR.send('data=' + info)

  XHR.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      console.log(this.responseText)
    }
  }
}

// Implementing the event add event listener
btn.addEventListener =
  ('click',
  function () {
    const info = input.value

    const XHR = new XMLHttpRequest() // create a new XHR object

    XHR.open('POST', 'page.html', true)
    XML.setRequestHeader('Content-type', 'application/json')
    XHR.send('data=' + info)

    XHR.addEventListener('load', function () {
      let data = this.responseText
      console.log(data)
    })
  })

// innerHTML
