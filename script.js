// JavaScript Document
document.addEventListener("DOMContentLoaded", function() {  
  var navLinks = document.querySelectorAll(".nav-link");  
  var contentArea = document.getElementById("content");  
  
  // 为每个导航链接添加点击事件监听器  
  navLinks.forEach(function(link) {  
    link.addEventListener("click", function(event) {  
      event.preventDefault(); // 阻止默认的链接行为  
      updateContent(link); // 更新内容区域  
    });  
  });  
  
  // 更新内容区域的函数  
  function updateContent(link) {  
    var url = link.getAttribute("data-url"); // 获取链接上附带的 data-url 属性  
    contentArea.innerHTML = "<iframe src='" + url + "'></iframe>"; // 用一个iframe元素加载新的网页内容  
  }  
});