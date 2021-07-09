const formData = document.querySelector('#contactForm'),
    firstConsentTableBody = document.querySelector('.consent-tbody1'),
    secondConsentTableBody = document.querySelector('.consent-tbody2'),
    thirdConsentTableBody = document.querySelector('.consent-tbody3'),
    fourthConsentTableBody = document.querySelector('.consent-tbody4'),
    tableContainer = document.querySelector('.table-container');

// Create new table row
const createRow = () => {
    tableContainer.style.display = 'block';
    let newRow = `
    <tr>
        <td>${formData['name1'].value}</td>
        <td>${formData['signature1'].value}</td>
        <td>${formData['date1'].value}</td>
    </tr>`;

    let newSecondRow = `
    <tr>
        <td>${formData['name2'].value}</td>
        <td>${formData['signature2'].value}</td>
        <td>${formData['date2'].value}</td>
    </tr>`;

    let newThirdRow = `
    <tr>
        <td>${formData['name3'].value}</td>
        <td>${formData['signature3'].value}</td>
        <td>${formData['date3'].value}</td>
    </tr>`;

    let newFourthRow = `
    <tr>
        <td>${formData['name4'].value}</td>
        <td>${formData['signature4'].value}</td>
        <td>${formData['date4'].value}</td>
    </tr>
    `;

    firstConsentTableBody.innerHTML += newRow;
    secondConsentTableBody.innerHTML += newSecondRow;
    thirdConsentTableBody.innerHTML += newThirdRow;
    fourthConsentTableBody.innerHTML += newFourthRow;
}