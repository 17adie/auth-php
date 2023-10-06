const set = document.getElementById("set")
const del = document.getElementById("del")
const get = document.getElementById("get")

set.addEventListener("click", function () {
  console.log("set")
  $.ajax({
    url: "api/controller/auth/session.php",
    type: "GET",
    success: function (data) {
      // Handle the response from the server
      console.log(data)
    },
  })
})
get.addEventListener("click", function () {
  console.log("get")
  $.ajax({
    url: "api/controller/auth/get.php",
    type: "GET",
    success: function (data) {
      // Handle the response from the server
      console.log(data)
    },
  })
})
del.addEventListener("click", function () {
  console.log("del")
  $.ajax({
    url: "api/controller/auth/delete.php",
    type: "GET",
    success: function (data) {
      // Handle the response from the server
      if (data) {
        // window.location.href = "login.html"
      }
    },
  })
})
