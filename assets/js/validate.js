const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const ValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const lgnForm = document.getElementById("lgnForm");
if (lgnForm) {
  lgnForm.addEventListener("submit", (e) => {
    const lgnEmail = document.getElementById("lgnEmail");
    const lgnPassword = document.getElementById("lgnPassword");

    const emailValue = lgnEmail.value.trim();
    const passwordValue = lgnPassword.value.trim();

    if (emailValue === "") {
      setError(lgnEmail, "Empty Fields.");
      e.preventDefault();
    } else if (!ValidEmail(emailValue)) {
      setError(lgnEmail, "Email Address consist of invalid chracters.");
      e.preventDefault();
    }
    if (passwordValue === "") {
      setError(lgnPassword, "Empty Fields.");
      e.preventDefault();
    }
  });
}

const supForm = document.getElementById("supForm");
if (supForm) {
  supForm.addEventListener("submit", (e) => {
    const supFirstName = document.getElementById("supFirstName");
    const supLastName = document.getElementById("supLastName");
    const supAddress = document.getElementById("supAddress");
    const supPetsName = document.getElementById("supPetsName");
    const supTeachersName = document.getElementById("supTeachersName");
    const supEmailAddress = document.getElementById("supEmailAddress");
    const supPassword = document.getElementById("supPassword");
    const supConfirmPassword = document.getElementById("supConfirmPassword");

    const supFirstNameValue = supFirstName.value;
    const supLastNameValue = supLastName.value;
    const supAddressValue = supAddress.value;
    const supPetsNameValue = supPetsName.value;
    const supTeachersNameValue = supTeachersName.value;
    const supEmailAddressValue = supEmailAddress.value.trim();
    const supPasswordValue = supPassword.value;
    const supConfirmPasswordValue = supConfirmPassword.value;

    if (supFirstNameValue.length == 0 || supFirstNameValue  === "") {
      setError(supFirstName, "Empty Fields.");
      e.preventDefault();
    } else if (!supFirstNameValue.match(/^[A-Za-z]*$/)) {
      setError(supFirstName, "Invalid Characters.");
      e.preventDefault();
    }

    if (supLastNameValue.length == 0 || supLastNameValue  === "") {
      setError(supLastName, "Empty Fields.");
      e.preventDefault();
    } else if (!supLastNameValue.match(/^[A-Za-z]*$/)) {
      setError(supLastName, "Invalid Characters.");
      e.preventDefault();
    }

    if (supAddressValue.length == 0 || supAddressValue  === "") {
      setError(supAddress, "Empty Fields.");
      e.preventDefault();
    }

    if (supPetsNameValue.length == 0 || supPetsNameValue  === "") {
      setError(supPetsName, "Empty Fields.");
      e.preventDefault();
    } else if (!supPetsNameValue.match(/^[A-Za-z]*$/)) {
      setError(supPetsName, "Invalid Characters.");
      e.preventDefault();
    }

    if (supTeachersNameValue.length == 0 || supTeachersNameValue  === "") {
      setError(supTeachersName, "Empty Fields.");
      e.preventDefault();
    } else if (!supTeachersNameValue.match(/^[A-Za-z]*$/)) {
      setError(supTeachersName, "Invalid Characters.");
      e.preventDefault();
    }

    if (supEmailAddressValue.length == 0 || supEmailAddressValue  === "") {
      setError(supEmailAddress, "Empty Fields.");
      e.preventDefault();
    } else if (!ValidEmail(supEmailAddressValue)) {
      setError(
        lgnsupEmailAddressEmail,
        "Email Address consist of invalid chracters."
      );
      e.preventDefault();
    }

    if (supPasswordValue.length == 0 || supPasswordValue  === "") {
      setError(supPassword, "Empty Fields.");
      e.preventDefault();
    }

    if (supConfirmPasswordValue.length == 0 || supConfirmPasswordValue  === "") {
      setError(supConfirmPassword, "Empty Fields.");
      e.preventDefault();
    } else if (supConfirmPasswordValue !== supPasswordValue) {
      setError(supConfirmPassword, "Password does not match.");
      e.preventDefault();
    }
  });
}

const vfForm = document.getElementById("vfForm");
if (vfForm) {
  const vfEmail = document.getElementById("vfEmail");
  const vfSec1 = document.getElementById("vfsec1");
  const vfSec2 = document.getElementById("vfsec2");

  const vfEmailValue = vfEmail.value.trim();
  const vfsec1Value = vfSec1.value.trim();
  const vfsec2Value = vfSec2.value.trim();

  if (vfEmailValue.length == 0 || vfEmailValue  === "") {
    setError(vfEmail, "Empty Fields.");
    e.preventDefault();
  } else if (!ValidEmail(vfEmailValue)) {
    setError(vfEmail, "Email Address consist of invalid chracters.");
    e.preventDefault();
  }
  if (vfsec1Value.length == 0 || vfsec1Value  === "") {
    setError(vfSec1, "Empty Fields.");
    e.preventDefault();
  } else if (!vfsec1Value.match(/^[A-Za-z]*$/)) {
    setError(vfSec1, "Invalid Characters.");
    e.preventDefault();
  }
  if (vfsec2Value.length == 0 || vfsec2Value  === "") {
    setError(vfSec2, "Empty Fields.");
    e.preventDefault();
  } else if (!vfsec2Value.match(/^[A-Za-z]*$/)) {
    setError(vfSec2, "Invalid Characters.");
    e.preventDefault();
  }
}

const rstForm = document.getElementById("rstForm");
if (rstForm) {
  const rstpassword = document.getElementById("rstpassword");
  const rstconfirmpass = document.getElementById("rstconfirmpass");

  const rstpasswordValue = rstpassword.value.trim();
  const rstconfirmpassValue = rstconfirmpass.value.trim();

  if (rstpasswordValue.length == 0 || rstpasswordValue  === "") {
    setError(rstpassword, "Empty Fields.");
    e.preventDefault();
  }
  if (rstconfirmpassValue.length == 0 || rstconfirmpassValue  === "") {
    setError(rstconfirmpass, "Empty Fields.");
    e.preventDefault();
  } else if (rstconfirmpassValue !== rstpasswordValue) {
    setError(rstpassword, "Password does not match.");
    setError(rstconfirmpass, "Password does not match.");
    e.preventDefault();
  }
}

const chkoutForm = document.getElementById("chkoutForm");
if (chkoutForm) {
  const chkfirstName = document.getElementById("chkfirstName");
  const chklastName = document.getElementById("chklastName");
  const chkEmail = document.getElementById("chkEmail");
  const chkAddress = document.getElementById("chkAddress");
  const chkCityProv = document.getElementById("chkCityProv");
  const chkRegion = document.getElementById("chkRegion");
  const chkZip = document.getElementById("chkZip");

  const chkfirstNameValue = chkfirstName.value.trim();
  const chklastNameValue = chklastName.value.trim();
  const chkEmailValue = chkEmail.value.trim();
  const chkAddressValue = chkAddress.value.trim();
  const chkCityProvValue = chkCityProv.value.trim();
  const chkRegionValue = chkRegion.value.trim();
  const chkZipValue = chkZip.value.trim();

  if (chkfirstNameValue.length == 0 || chkfirstNameValue  === "") {
    setError(chkfirstName, "Empty Fields.");
    e.preventDefault();
  } else if (!chkfirstNameValue.match(/^[A-Za-z]*$/)) {
    setError(chkfirstName, "Invalid Characters.");
    e.preventDefault();
  }
  if (chklastNameValue.length == 0 || chklastNameValue  === "") {
    setError(chklastName, "Empty Fields.");
    e.preventDefault();
  } else if (!chklastNameValue.match(/^[A-Za-z]*$/)) {
    setError(chklastName, "Invalid Characters.");
    e.preventDefault();
  }

  if (chkEmailValue.length == 0 || chkEmailValue  === "") {
    setError(chkEmail, "Empty Fields.");
    e.preventDefault();
  } else if (!ValidEmail(chkEmailValue)) {
    setError(chkEmail, "Email Address consist of invalid chracters.");
    e.preventDefault();
  }

  if (chkAddressValue.length == 0 || chkAddressValue  === "") {
    setError(chkAddress, "Empty Fields.");
    e.preventDefault();
  }
  if (chkCityProvValue.length == 0 || chkCityProvValue  === "") {
    setError(chkCityProv, "Empty Fields.");
    e.preventDefault();
  }
  if (chkRegionValue.length == 0 || chkRegionValue  === "") {
    setError(chkRegion, "Empty Fields.");
    e.preventDefault();
  }
  if (chkZipValue.length == 0 || chkZipValue  === "") {
    setError(chkZip, "Empty Fields.");
    e.preventDefault();
  }
}

const pymntForm = document.getElementById("pymntForm");
if (pymntForm) {
  const cc_name = document.getElementById("cc_name");
  const cc_number = document.getElementById("cc_number");
  const cc_expiration = document.getElementById("cc_expiration");
  const cc_cvv = document.getElementById("cc_cvv");

  const cc_nameValue = cc_name.value.trim();
  const cc_numberValue = cc_number.value.trim();
  const cc_expirationValue = cc_expiration.value.trim();
  const cc_cvvValue = cc_cvv.value.trim();

  if (cc_nameValue.length == 0 || cc_nameValue  === "") {
    setError(cc_name, "Empty Fields.");
    e.preventDefault();
  } else if (!cc_nameValue.match(/^[A-Za-z]*$/)) {
    setError(cc_name, "Invalid Characters.");
    e.preventDefault();
  }
  if (cc_numberValue.length == 0 || cc_numberValue  === "") {
    setError(cc_number, "Empty Fields.");
    e.preventDefault();
  }
  if (cc_expirationValue.length == 0 || cc_expirationValue  === "") {
    setError(cc_expiration, "Empty Fields.");
    e.preventDefault();
  }
  if (cc_cvvValue.length == 0 || cc_cvvValue  === "") {
    setError(cc_cvv, "Empty Fields.");
    e.preventDefault();
  }
}
