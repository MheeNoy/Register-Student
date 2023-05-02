
/*function add() {
  var div = document.createElement("div");
  div.setAttribute("class", "listmember");
  div.style("margin-top: 20px;");
  var ul = document.createElement("ul");
  ul.setAttribute("class", "list-group list-group-horizontal");
  var li = document.createElement("li");
  li.setAttribute("class", "col-1");
  li.style("list-style: none");
  const getform = document.getElementById("add").value;
  li.innerHTML = li.innerHTML + getform;
  ul.appendChild(li);

  var mix = div.appendChild(ul);

  document.getElementsByClassName("Tolist").appendChild(mix);
}
*/

/*const add =() =>{
    
    var d = new Date(),
    month = "" + (d.getMonth() + 1),
    day = "" + d.getDate(),
    year = d.getFullYear();
    timee = "" + d.getHours();
    mint = "" + d.getMinutes();

  if (month.length < 2) month = "0" + month;
  if (day.length < 2) day = "0" + day;
  

  const add = document.getElementsByClassName("listmember");
  let expandingList = document.createElement("ul", { is: "expanding-list" });
 const list = expandingList.className = "list-group";

  
  return [year, month, day].join("-") + " " + [timee, mint].join(":");

};*/

const edit = (event) => {
  var name = event;
  var button = "Save";
  let text = document.getElementById(name).innerText;

  var edit = document.getElementById("button");

  edit.innerHTML = button;
  document.querySelector('input[name="text"]').value = text;
  //var field = document.getElementById("nameform");
  // using element properties
  //field.setAttribute("text", "horse");
};
const deletename = (event) => {
  let text = document.getElementById("name").innerText;
  document.querySelector('input[name="delete"]').value = text;
};
