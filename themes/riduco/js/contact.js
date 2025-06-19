document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   submitFormContact();
});

const submitFormContact = () => {
   const form = document.getElementById('formContact');
   if (form) {
      form.addEventListener('submit', e => {
         e.preventDefault();

         let btnSubmit = form.querySelector('#btnContactSubmit');
         let spinnerForm = btnSubmit.querySelector('.spinner-border');
         spinnerForm.classList.remove('d-none');
         btnSubmit.setAttribute('disabled', true);

         form.classList.add('was-validated');

         if (!form.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();

            spinnerForm.classList.add('d-none');
            btnSubmit.removeAttribute('disabled');
         } else {
            let currentDate = new Date();
            let dataForm = new FormData(form);

            dataForm.append('action', 'insert_contact');
            dataForm.append('date', `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${currentDate.getDate()} ${currentDate.getHours()}:${currentDate.getMinutes()}:${currentDate.getSeconds()}`);
            dataForm.append('url', window.location.href);

            insertUser(dataForm).then(res => {
               if (res.success && res.data) {
                  insertUserDrive(res.data.data).then(resDrive => {
                     const myModal = new bootstrap.Modal(document.getElementById('contactModal'));
                     myModal.show();

                     spinnerForm.classList.add('d-none');
                     btnSubmit.removeAttribute('disabled');

                     form.classList.remove('was-validated');
                     form.reset();
                  });
               }
            });
         }
      });
   }
}

async function insertUser(dataForm) {
   const response = await fetch(ajax_bones.ajaxurl, {
      method: 'POST',
      body: dataForm
   });
   return response.json();
}

async function insertUserDrive(json) {
   const formBody = Object.keys(json).map(key => {
      return encodeURIComponent(key) + '=' + encodeURIComponent(json[key]);
   }).join('&');

   const response = await fetch(`https://script.google.com/macros/s/AKfycbySQXT_gfydz1SLbmIP7gaigT39gYmr1D5D88JPZg8GhkWipGQeooxFl5J8renF0WiZ/exec?${json}`, {
      method: 'POST',
      headers: {
         'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: formBody
   });
   return response.json();
}