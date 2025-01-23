/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

console.log('Donation scripts added...')

const donationForm = document.querySelector('#donation-widget')
const frequencyButtons = document.querySelectorAll('#donation-widget input[type="radio"][name="donation_frequency"]')
// const amountButtonsWrapper = document.querySelector('.amount-buttons-wrapper')
const amountButtons = document.querySelectorAll('.amount-buttons-wrapper > input')
const donationErrorMsg = document.querySelector('#donation-error-message')
const resetButton = document.querySelector('#donation-widget input[type="reset"]')
const submitButton = document.querySelector('#donation-widget input[type="submit"]')

function handleReset() {
  console.log('Resetting ...')
  donationErrorMsg.innerHTML = '<span class="w-8 h-8 flex justify-center items-center rounded-full text-red-600 border border-red-600">1</span>Select whether one-off or recurring.'
  amountButtons.forEach( amt => {
    amt.setAttribute('disabled','true')
    amt.setAttribute('aria-disabled','true')
    // amt.nextElementSibling.setAttribute('aria-disabled','true')
  })
  submitButton.setAttribute('disabled','true')
  submitButton.setAttribute('aria-disabled','true')
  submitButton.nextElementSibling.setAttribute('aria-disabled','true')
  donationForm.reset()
}
handleReset();

frequencyButtons.forEach( freq => {
  freq.addEventListener('click', (e) => {
    let object = e.target.parentElement.children;
    let array = [];
    let id = e.target.id;
    for (var key of Object.keys(object)) {
      let e = object[key];
      array = [...array, e];
    }
    console.log(array)
    array.forEach(sib => {
      ( sib.htmlFor === id ) ? sib.setAttribute('aria-disabled','false') : sib.setAttribute('aria-disabled','true'); 
    })
    amountButtons.forEach( amt => {
      amt.removeAttribute('disabled')
      amt.setAttribute('aria-disabled', 'false')
      amt.nextElementSibling.setAttribute('aria-disabled','false')
    })
    donationErrorMsg.innerHTML = '<span class="w-8 h-8 flex justify-center items-center rounded-full text-red-600 border border-red-600">2</span>Select your donation amount.'
  })
})

amountButtons.forEach( amt => {
  amt.addEventListener('click', (e) => {
    console.log(e.target)
    submitButton.setAttribute('aria-disabled','false')
    submitButton.removeAttribute('disabled')
    submitButton.nextElementSibling.setAttribute('aria-disabled','false')
    donationErrorMsg.innerHTML = '<span class="w-8 h-8 flex justify-center items-center rounded-full text-red-600 border border-red-600">3</span>Finally, click submit.'
  })  
})

resetButton.addEventListener('click', handleReset )