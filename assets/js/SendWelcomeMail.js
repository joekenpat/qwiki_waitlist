const SendWelcomeMail = (email, name) => {
  const postData = new FormData();
  postData.append("signup_email", email);
  postData.append("signup_name", name);
  axios({
    method: "POST",
    url: "./scripts/send_email.php",
    data: postData,
    config: { headers: { Accept: "application/json" } },
  })
    .then((res) => {
      console.log(res.data);
    })
    .catch((err) => {
      if (err.response) {
        console.log(err.response);
      } else if (err.request) {
        console.log(err.request);
      } else {
        console.log("Error", err.message);
      }
    });
};
