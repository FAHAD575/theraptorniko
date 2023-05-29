const FirstName = document.getElementByID('fname');
const LastName = document.getElementByID('lname');
const PhoneNumber = document.getElementByID('PhoneNumber');
const Email = document.getElementByID('email');
const NameOfOrganization = document.getElementByID('NameOfOrganization');
const BriefExplanation =document.getElementByID('Details');
const WhatYouNeed = document.getElementByID('WhatYouNeed');
const AdditionalInfo = document.getElementbyID('Additional Info');


function saveUserInput() {
	const userInput = {
		Fname: FirstName.value,
		Lname: LastName.value,
		PhoneNumber: PhoneNumber.value,
		Email: Email.value,
		NameOfOrg: NameOfOrganization.value,
		BriefEx: BriefExplanation.value,
		WhatYouNeed: WhatYouNeed.value,
		AdditionalInfo: AdditionalInfo.value,
		
	};

	localStorage.setItem('userInput', JSON.stringify(userInput));
}

function loadUserInput() {
	const savedUserInput = localStorage.getItem('userInput');
	if(savedUserInput) {
		const userInput = JSON.parse(savedUserInput);

		FirstName.value = userInput.Fname;
		LastName.value = userInput.Lname;
		PhoneNumber.value = userInput.PhoneNumber;
		Email.value = userInput.Email;
		NameOfOrganization.value = NameOfOrg;
		BriefExplanation.value = BriefEx;
		WhatYouNeed.value = WhatYouNeed;
		AdditionalInfo.value = AdditionalInfo;
	}
}

function redirect()
{
    window.location.href = userInput.Email;
}

