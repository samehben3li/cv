
function next(a){
  var pageHt = document.getElementById('pageHidden');
  var page = parseInt(pageHt.value)+1;
  
  pageHt.value = page;
  if(page == 1)
  {
    const prec = document.querySelector("#precBtn");
    prec.classList.toggle('active');
    const tab1 = document.querySelector("#page1");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page2");
    tab2.classList.toggle('active');
  }
  if(page == 2)
  {
    const tab1 = document.querySelector("#page2");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page3");
    tab2.classList.toggle('active');
  }
  if(page == 3)
  {
    const tab1 = document.querySelector("#page3");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page4");
    tab2.classList.toggle('active');
  }
  if(page == 4){
    const tab1 = document.querySelector("#page4");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page5");
    tab2.classList.toggle('active');
    const next = document.querySelector("#nextBtn");
    next.classList.toggle('active');
    const btn = document.querySelector(".btnSubmit");
    btn.classList.toggle('active');
  }
  return page;
  
}

function prec(a){
  var pageHt = document.getElementById('pageHidden');
  var page = parseInt(pageHt.value)-1;
  pageHt.value = page;
  if(page==0)
  {
    const prec = document.querySelector("#precBtn");
    prec.classList.toggle('active');
    const tab1 = document.querySelector("#page1");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page2");
    tab2.classList.toggle('active');
  }
  if(page == 1)
  {
    const tab1 = document.querySelector("#page2");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page3");
    tab2.classList.toggle('active');
  }
  if(page == 2)
  {
    const tab1 = document.querySelector("#page3");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page4");
    tab2.classList.toggle('active');
    
  }
  if(page == 3)
  {
    const tab1 = document.querySelector("#page4");
    tab1.classList.toggle('active');
    const tab2 = document.querySelector("#page5");
    tab2.classList.toggle('active');
    const prec = document.querySelector("#nextBtn");
    prec.classList.toggle('active');
    const btn = document.querySelector(".btnSubmit");
    btn.classList.toggle('active');
  }
  
}
