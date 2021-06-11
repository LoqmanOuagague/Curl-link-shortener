document.getElementById("shorten").addEventListener('click', function() {
    var link = document.getElementById("link-input").value;
    if(link.length !== 0){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", './process.php', true);
        
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function() { // Call a function when the state changes.
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                var response =JSON.parse(xhr.response);
               console.log(response);
               if(response.error == "1"){
                alert("OOps! it seems that the input is empty"); 
               }else if(response.error == "2"){
                alert("OOps! it seems that this link is invalid"); 
                
               }else{
                   alert("Your link has been successfully shortened :\n"+response.new_link);
               }
            }
        }
        xhr.send("link="+link);
        
    }else{
        alert("OOps! it seems that the input is empty");
    }
});