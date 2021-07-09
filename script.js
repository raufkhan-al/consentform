const formData = document.querySelector('#contactForm'),
    consentTableBody = document.querySelector('.consent-tbody'),
    tableContainer = document.querySelector('.table-container');


// Create new table row
const createRow = () => {
    tableContainer.style.display = 'flex';
    let newRow = `
    <tr>
        <td>${formData['name1'].value}</td>
        <td>${formData['signature1'].value}</td>
        <td>${formData['date1'].value}</td>
        <td>${formData['name2'].value}</td>
        <td>${formData['signature2'].value}</td>
        <td>${formData['date2'].value}</td>
        <td>${formData['name3'].value}</td>
        <td>${formData['signature3'].value}</td>
        <td>${formData['date3'].value}</td>
        <td>${formData['name4'].value}</td>
        <td>${formData['signature4'].value}</td>
        <td>${formData['date4'].value}</td>
    </tr>
    `;
    consentTableBody.innerHTML += newRow;
}