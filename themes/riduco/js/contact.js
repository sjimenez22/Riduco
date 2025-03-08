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
               console.log(res);

               if (res.status === 'success' && res.data) {

                  // let stringData = '';
                  // dataForm.forEach(function (value, key) {
                  //    stringData += `${key}=${value}&`;
                  // });

                  // insertUserDrive(stringData).then(resDrive => {
                  //    let message = document.getElementsByClassName('modal-text');
                  //    message[0].innerHTML = res.message;

                  //    const myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                  //    myModal.show();

                  //    let cityActive = form.querySelector('p.active');
                  //    cityActive.classList.remove('active');

                  //    spinnerForm.classList.add('d-none');
                  //    btnSubmit.removeAttribute('disabled');

                  //    form.classList.remove('was-validated');
                  //    form.reset();
                  // });
               } else {
                  // let message = document.getElementsByClassName('modal-text');
                  // message[0].innerHTML = res.message;

                  // const myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                  // myModal.show();

                  // spinnerForm.classList.add('d-none');
                  // btnSubmit.removeAttribute('disabled');
               }
            });
         }
      });
   }
}

async function insertUser(dataForm) {
   const response = await fetch('inc/lib', {
      method: 'POST',
      body: dataForm
   });
   return response.json();
}

async function insertUserDrive(json) {
   const response = await fetch(`https://script.google.com/macros/s/AKfycby8pYdJZnD4YHNYlTaXElMfNghIPAA9H_x7usIO9nOMP2TfEVH-whHQjKUwjvK4kH8Ldg/exec?${json}`, {
      method: 'GET'
   });
   return response.json();
}