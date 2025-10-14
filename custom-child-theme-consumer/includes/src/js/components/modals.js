export default ()=>{
    const weChatToggle = document.querySelector('[href="#wechat-modal"]');
  

  
    weChatToggle.addEventListener('click',e=>{
        e.preventDefault()
        e.stopPropagation()
        //document.querySelector('#wechat-modal')
        console.log( document.querySelector('#wechat-modal'))
    })
}