export default () => {

    const allTitles = document.querySelectorAll('.items .title')
    const allDescription = document.querySelectorAll('.description')
    const iconPlus = document.querySelectorAll('.plus')
    const iconMinus = document.querySelectorAll('.minus')
    
    const hideAllDescription = ()=>{ allDescription.forEach(item=>{
            item.style.maxHeight=null
            item.classList.remove('shown')
        }) 
    }
    const inactivateTitles = ()=>{ 
        allTitles.forEach(item=>{
            item.classList.remove('active')
        })
    }
   
    const togglePlusMinus = () =>{
        
        iconPlus.forEach(plus=>{
            plus.classList.remove('hide')
        })

        iconMinus.forEach(minus=>{
            minus.classList.add('hide')
        })  
    }
    
    if(!allTitles) return // do nothing


    allTitles.forEach(item=>{
        if(item.classList.contains('active')){
            item.querySelector('.plus').classList.toggle('hide')
            item.querySelector('.minus').classList.toggle('hide')
            let target = document.querySelector(`#${item.dataset.target}`)
            let height = target.scrollHeight
            // target.classList.add('shown')
            target.style.maxHeight = (height + 20 )+'px'
        }
        // bind a click event
        item.addEventListener('click',e=>{
            e.preventDefault()
            hideAllDescription()
            inactivateTitles()
            e.currentTarget.classList.add('active')
            let target = document.querySelector(`#${e.target.dataset.target}`)
            let height = target.scrollHeight
            target.classList.add('shown')
            target.style.maxHeight = (height + 20 )+'px'
            togglePlusMinus()
            item.querySelector('.plus').classList.add('hide')
            item.querySelector('.minus').classList.remove('hide')
        })
    })
}