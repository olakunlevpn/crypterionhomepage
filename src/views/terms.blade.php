@extends('crypterionhomepage::layouts.app')

@section('content')


    <!-- CONTENT
    ================================================== -->
    <section class="pt-8 pt-md-11 pb-8 pb-md-14">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">

            <!-- Heading -->
            <h1 class="display-4 mb-2">
              Terms of Service (User Agreement)
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-md-0">
            Effective date: {{ $data['content-updated'] }}
            </p>

          </div>
          <div class="col-auto">
            
          @include('crypterionhomepage::partials.print') 

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class="my-6 my-md-8">

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-8">

          
    

          <p>This is an agreement between you and {{ ucwords($data['name']) }}, a company of Maylancer IT (NG) Limited An ICT company registered by corporate affairs commission of Nigeria (CAC) with Registration Code RC: 1566097. ("{{ ucwords($data['name']) }}"). This website and its related services are owned and operated by {{ ucwords($data['name']) }} a company of Maylancer IT (NG) Limited An ICT company registered by corporate affairs commission of Nigeria (CAC) with Registration Code RC: 1566097. By signing up to use an account through {{ $data['name'] }}.com, or any associated websites, APIs, or mobile applications (collectively the "{{ ucwords($data['name']) }} Site"), you agree that you have read, understood, and accept all of the terms and conditions contained in this Agreement.</p>
            <p>For all purposes, the English language version of this user agreement shall be the original, governing instrument. In the event of any conflict between the English language version of this user agreement and any subsequent translation into any other language, the English language version shall govern and control.</p>

            <h2>About {{ ucwords($data['name']) }}</h2>
            <p>{{ ucwords($data['name']) }} is a leading peer to peer marketplace to buy and sell digital currency with over 300 ways to exchange. {{ ucwords($data['name']) }} also offers hosted digital wallet services. Our worldwide user base is able to post offers to either buy or sell digital currency via any means they wish. The creator of the offer is responsible for listing terms of the trade. Once an offer is selected by another {{ ucwords($data['name']) }} user, digital currency is held in our escrow service from the party that is selling it. The digital currency is released from escrow to the buyer by the seller once the buyer has completed the terms of the trade. The escrow is released back to the seller if the buyer chooses to cancel the trade. The seller may not cancel the trade at any point. The seller only has the option to release the digital currency from escrow to the buyer. This is for the security purposes of the buyer. Should a seller need to cancel the trade due to a buyer not following the terms of the trade, they must start a dispute and provide a reason for doing so.</p>
            
            <ol class="landing__ordered-parent-list">
                <li>
                    <h3 class="landing__ordered-list-header">    
                        General
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>We reserve the right to change these Terms at any time, in our sole discretion. Any such changes in respect of your use of the Services will take effect when posted on the Website. If you have supplied us with an email address, we will also notify you by email of changes to these Terms.</li>
                        <li>It is your responsibility to read the Terms carefully on each occasion you use the Services. Your continued use of the Services shall signify your acceptance to be bound by the current Terms.</li>
                        <li>Failure or delay by {{ ucwords($data['name']) }} in enforcing or partially enforcing any provision of these Terms shall not be construed as a waiver of any rights.</li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Definitions
                    </h3>

                    <ol class="landing__ordered-child-list">
                        <li>
                            All references to the ‘company,’ ‘us,’ ‘our,’ ‘we’ or ‘{{ ucwords($data['name']) }}’ ‘{{ $data['name'] }}.com’ means {{ ucwords($data['name']) }} a company of Maylancer IT (NG) Limited An ICT company registered by corporate affairs commission of Nigeria (CAC) with Registration Code RC: 1566097., a company registered under the laws of the Nigeria, having its registered address at Eleyele, Ibadan, OYO State Nigeria.
                        </li>
                        <li>
                            All references to ‘you,’ ‘your,’ or the ‘user’ mean the person or persons, using the Website and/or using the Services via the Website.
                        </li>
                        <li>
                            All references to the ‘Website’ shall include reference to all URL’s operated by {{ ucwords($data['name']) }}.
                        </li>
                        <li>
                            ‘Business Day’ means a day other than a public holiday, a Saturday or a Sunday, in the Nigeria.
                        </li>
                        <li>
                            ‘Digital Currency’ means Bitcoin, Litecoin, Ethereum or any other blockchain-based currency.
                        </li>
                        <li>
                            ‘Services’ means any feature provided by us via the Website or any local application (mobile desktop or otherwise), including without limitation Wallet services and Marketplace services.
                        </li>
                        <li>
                            ‘Communication’ includes communication by email.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Eligibility
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            You hereby accept and acknowledge that you: (a) Are of legal age to agree to these Terms; (b) Have not previously been suspended or removed from using our Services.
                        </li>
                        <li>
                            If you are using the Services on behalf of a legal entity, you further represent and warrant that: (i) The legal entity is duly organized and validly existing under the applicable laws of the jurisdiction of its organization, and (ii) You are duly authorized by such legal entity to act on its behalf.                            
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Jurisdiction, territorial limitations &amp; severability
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            These Terms and your use of the Website and Services shall be governed by and construed in accordance with Nigeria Law. Any dispute arising in connection with these Terms or your use of the Website or Services will be resolved exclusively in the courts of the Nigeria. Nothing in these Terms shall be deemed to affect your statutory rights under Nigeria law
                        </li>
                        <li>
                            If any part of these Terms is held by any court of Nigeria to be invalid or unenforceable in whole or in part, the validity or enforceability of the other sections of these terms and conditions shall not be affected. Any headings contained in these Terms are for informational purposes only and are not enforceable provisions of these Terms
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Privacy notice &amp; security
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            We endeavour to take all reasonable steps to protect your personal information. However, we cannot guarantee the security of any data you disclose online. You accept the inherent security risks of providing information and dealing online over the Internet and will not hold us responsible for any breach of security unless this is due to our negligence.
                        </li>
                        <li>
                            Please view our official privacy notice document:
                            <a href="/page/privacy">https://{{ $data['name'] }}.com/pages/privacy</a>.<p></p>   
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Assumption of risk, limitations on liability &amp; indemnity 
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            You accept and acknowledge and accept the various risks inherent to using Digital Currency including but not limited to hardware failure, software issues, internet connection failure, malicious software, third party interference leading to access to your wallet and other user data. You accept and acknowledge that {{ ucwords($data['name']) }} will not be responsible for any communication failures, disruptions, errors, distortions or delays you may experience when using the Services, however caused.
                        </li>
                        <li>
                            You accept and acknowledge that there are risks associated with utilizing any Digital Currency network, including, but not limited to, the risk of unknown vulnerabilities in or unanticipated changes to the network protocol. You acknowledge and accept that {{ ucwords($data['name']) }} has no control over any cryptocurrency network and will not be responsible for any harm occurring as a result of such risks. 
                        </li>
                        <li>
                            We will use reasonable endeavours to verify the accuracy of any information on the Website but we make no representation or warranty of any kind, express or implied, statutory or otherwise, regarding the contents of the Website, information and functions made accessible through the Website, any hyperlinks to third party websites, or the security associated with the transmission of information through the Website or any website linked to by the Website.
                        </li>
                        <li>
                            <p>
                                We will not be responsible or liable to you for any loss and take no responsibility for and will not be liable to you for any use of our Services, including but not limited to any losses, damages or claims arising from:
                            </p>
                            <ul>
                                <li>
                                    User error such as forgotten passwords, incorrectly constructed transactions, or mistyped Digital Currency addresses;
                                </li>
                                <li>
                                    Server failure or data loss;
                                </li>
                                <li>
                                    Corrupted Wallet files;
                                </li>
                                <li>
                                    Unauthorized access to applications;
                                </li>
                                <li>
                                    Any unauthorized third party activities, including without limitation the use of viruses, phishing, brute forcing or other means of attack against the Website or Services;
                                </li>
                            </ul>
                        </li>
                        <li>
                            We make no warranty that the Website or the server that makes it available, are free of viruses or errors, that its content is accurate, that it will be uninterrupted, or that defects will be corrected. We will not be responsible or liable to you for any loss of any kind, from action taken, or taken in reliance on material, or information, contained on the Website.
                        </li>
                        <li>
                            Subject to 7.1 below, any and all indemnities, warranties, terms and conditions (whether express or implied) are hereby excluded to the fullest extent permitted under Nigeria law.
                        </li>
                        <li>
                            We will not be liable, in contract, or tort (including, without limitation, negligence), other than where we have been fraudulent or made negligent misrepresentations.
                        </li>
                        <li>
                            Nothing in these Terms excludes or limits liability for death or personal injury caused by negligence, fraudulent misrepresentation, or any other liability which may not otherwise be limited or excluded under Nigeria law.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Agreement to hold {{ ucwords($data['name']) }} harmless
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            <p>
                                You agree to hold harmless {{ ucwords($data['name']) }} (and each of our officers, directors, members, employees, agents and affiliates) from any claim, demand, action, damage, loss, cost or expense, including without limitation reasonable legal fees, arising out or relating to:
                            </p>
                            <ol class="landing__ordered-child-list">
                                <li>
                                    Your use of, or conduct in connection with, our Services;
                                </li>
                                <li>
                                    Any feedback or submissions you provide (see 19 below);
                                </li>
                                <li>
                                    Your violation of these Terms; or
                                </li>
                                <li>
                                    Violation of any rights of any other person or entity.
                                </li>
                            </ol>
                        </li>
                        <li>
                            If you are obligated to indemnify us, we will have the right, in our sole discretion, to control any action or proceeding (at our expense) and determine whether we wish to settle it.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        No liability for third party services and content
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            In using our Services, you may view content or utilize services provided by third parties, including links to web pages and services of such parties (“Third Party Content”). We do not control, endorse or adopt any Third-Party Content and will have no responsibility for Third Party Content including, without limitation, material that may be misleading, incomplete, erroneous, offensive, indecent or otherwise objectionable in your jurisdiction. In addition, your dealings or correspondence with such third parties are solely between you and the third parties. We are not responsible or liable for any loss or damage of any sort incurred as a result of any such dealings and you understand that your use of Third Party Content, and your interactions with third parties, is at your own risk.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Hosted digital currency wallet
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            The hosted digital currency wallet service provided by {{ ucwords($data['name']) }} is a secure method of storing, sending, and receiving digital currency. {{ ucwords($data['name']) }} reserves the right to refuse to process any transaction if required by law or if we deem the transactions to be against our terms.
                        </li>
                        <li>
                            You hereby accept and acknowledge that you take responsibility for all activities that occur under your Wallet and accept all risks of any authorized or unauthorized access to your Wallet, to the maximum extent permitted by law.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        {{ ucwords($data['name']) }} services
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            As described in more detail below, the Services, among other things, provide in-browser
                    software that (a) generates and stores Digital Currency Wallet Addresses and (b) Facilitates the
                    submission of Digital Currency transaction data to the relevant Digital Currency blockchain network
                    without requiring you to download or install the associated Digital Currency network software to
                    your local device.
                        </li>
                        <li>
                            In order for transactions to be completed, the digital currency transaction must be confirmed
                    by the associated public ledger (blockchain). These blockchains are not owned or operated by {{ ucwords($data['name']) }}
                    in any way. Transmission of these transactions is purely dependent on the specific digital currency
                    network. You understand and agree that any transaction may never complete or be significantly
                    delayed due to the network properties of the associated digital currency network.
                        </li>
                        <li>
                            {{ ucwords($data['name']) }} does not store digital currency. Digital currencies are always stored on their
                    respective networks or blockchains. All digital currency transactions occur within the digital
                    currency network, not on {{ ucwords($data['name']) }}. There are no guarantees that the transaction will process on the
                    digital currency network.
                        </li>
                        <li>
                            <p>
                                Marketplace. {{ ucwords($data['name']) }} acts as an escrow service between two parties, we have no affiliation with
                    any of our users available payment methods including but not limited to Paypal, Western Union, Visa,
                    Mastercard, Skrill. {{ ucwords($data['name']) }} also has no affiliation with any of the buyers or sellers on its
                    platform. Transactions happen peer to peer between the buyers and sellers. Users agree upon which
                    payment methods they wish to transact with and take all responsibility of making sure they are
                    acting in a lawful manner.
                            </p>
                            <ol class="landing__ordered-child-list">
                                <li>
                                    <p>
                                        {{ ucwords($data['name']) }} acts as an escrow service between two parties. The funds are kept safe until payment
                    has been confirmed received and valid. {{ ucwords($data['name']) }} does not act as a payment processor. All liability
                    for sending and receiving and checking the validity of the transactions lie between the buyer and
                    seller. Once payment has been confirmed, the funds will be released from escrow. In case of an issue
                    during a trade that cannot be settled, either party can dispute the trade. This will be investigated
                    by the {{ ucwords($data['name']) }} moderators and decision will be made according to evidence provided by both the
                    parties. {{ ucwords($data['name']) }} moderators resolve disputes by evaluating trade terms, offer instructions, evidence
                    of payment, trade chat interaction, user reputation, past trading history as well as data submitted
                    and or collected in accordance with the Privacy Notice.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <b>
                                            Buying Digital Currency
                                        </b>
                                        -
                                        <span>
                                            To purchase digital currency on our peer to peer platform:
                                        </span>
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                             Select Payment Method
                                            </p>
                                            <ul>
                                                <li>There are currently over 300 payment methods to choose from.</li>
                                                <li>Each payment method contains offers from other {{ ucwords($data['name']) }} users.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p>
                                                Choose Offer
                                            </p>
                                            <ul>
                                                <li>Offers from {{ ucwords($data['name']) }} Users have their own terms and conditions.</li>
                                                <li>Each offer will vary in exchange rate, speed of exchange, and terms.</li>
                                                <li>It is your responsibility to read offer terms and conditions and follow them exactly. If you do not follow the offer terms and conditions your payment will not be accepted. Never submit payment unless you have followed all terms and conditions listed in the offer. If you submit payment without following the terms and conditions {{ ucwords($data['name']) }} cannot refund you.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p>
                                                Complete Payment
                                            </p>
                                            <ul>
                                                <li>Submit payment according to the terms and conditions of the offer.</li>
                                                <li>Once you complete the payment, click "PAID"</li>
                                                <li>At this time the seller will validate the payment, then release the digital currency to you, completing the trade.</li>
                                                <li>If the seller does not release the digital currency, report the issue on the trade page. A moderator will settle the dispute.</li>
                                                <li>Do not cancel the trade if you have submitted the payment and confirmed the payment.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>
                                        <b>
                                            Selling Digital Currency
                                        </b>
                                        -
                                        <span>
                                            To sell digital currency on our peer to peer platform:
                                        </span>
                                    </p>
                                    <ul>
                                        <li>
                                            Create an offer to sell and agree to the terms and conditions:
                                            <ul>
                                                <li>As a vendor you accept all risk and liabilities for any fraud incurred through the sale of bitcoin.</li>
                                                <li>All taxes to be paid are your responsibility.</li>
                                                <li>{{ ucwords($data['name']) }} charges vendors an escrow fee for all escrow based trades.</li>
                                                <li>{{ ucwords($data['name']) }} will not reimburse any losses to the seller due to fraud and our escrow fee will not be refunded.</li>
                                                <li>No brokering of gift cards is allowed.</li>
                                                <li>No trades outside of escrow are allowed. No exchange of outside contact information is allowed.</li>
                                                <li>You must be instantly responsive to your customers or else deactivate your offers.</li>
                                                <li>You must use the Report scam on completed trade page to report any scams. Do not contact support with requests to cancel trades, simply file a dispute and wait for a moderator.</li>
                                                <li>If accepting gift cards as payment, {{ ucwords($data['name']) }} is not responsible if you fail to redeem the gift card before you release digital currency to the buyer. If you do not redeem the gift card before releasing the digital currency from escrow, the buyer may redeem it first leaving you without payment.</li>
                                                <li>Any advertisement of your own website placed in any section of {{ ucwords($data['name']) }} such as your bio, offer terms or trade chat where buying or selling bitcoins is conducted without {{ ucwords($data['name']) }} escrow is strictly prohibited. If you are a registered company, advertising your company name is allowed. It is allowed to share your website that is created solely for the buyer to finish trade and that is tied to your {{ ucwords($data['name']) }} trade escrow (i.e trusted 3rd party debit/credit card processing).  Such websites may not contain advertisements nor contacts to your services.</li>
                                                <li>Having multiple accounts within same payment method category is against the rules and will lead to a permanent ban.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Accept payment
                                            <ul>
                                                <li>When a {{ ucwords($data['name']) }} user selects your offer, process the payment immediately.</li>
                                                <li>Once you have accepted the payment, release the digital currency from escrow.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Compliance
                                            <ul>
                                                <li>You are wholly responsible to comply with all laws and regulations for the jurisdiction(s) in which your exchange takes place.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </li>
                        <li>
                            Relationship. Nothing in these Terms is intended to nor shall create any partnership, joint
                    venture, agency, consultancy or trusteeship, you and {{ ucwords($data['name']) }} being with respect to one another
                    independent contractors.
                        </li>
                        <li>
                            Accuracy of Information. You represent and warrant that any information you provide via the
                    Services is accurate and complete. You accept and acknowledge that {{ ucwords($data['name']) }} is not responsible for any
                    errors or omissions that you make in connection with any Digital Currency transaction initiated via
                    the Services, for instance, if you mistype a Wallet Address or otherwise provide incorrect
                    information. We strongly encourage you to review your transaction details carefully before
                    completing them via the Services
                        </li>
                        <li>
                            No Cancellations or Modifications. Once transaction details have been submitted to the Digital
                    Currency network via the Services, the Services cannot assist you to cancel or otherwise modify your
                    transaction details. {{ ucwords($data['name']) }} has no control over any Digital Currency network and does not have the
                    ability to facilitate any cancellation or modification requests.
                        </li>
                        <li>
                            Taxes. It is your responsibility to determine what, if any, taxes apply to the transactions for
                    which you have submitted transaction details via the Services, and it is your responsibility to
                    report and remit the correct tax to the appropriate tax authority. You agree that {{ ucwords($data['name']) }} is not
                    responsible for determining whether taxes apply to your Digital Currency transactions or for
                    collecting, reporting, withholding or remitting any taxes arising from any Digital Currency
                    transactions.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Fees for using {{ ucwords($data['name']) }} services
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            Creating a Wallet is free. {{ ucwords($data['name']) }} charges fees for Services, applicable fees will be displayed prior to you using any Service to which a fee applies. See “<a href="https://{{ $data['name'] }}.com/support/">{{ ucwords($data['name']) }} Fees</a>” for further details. Our fees are subject to change and {{ ucwords($data['name']) }} reserves the right to adjust its pricing and fees and at any time.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Digital currency mining                        
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            Digital Currency Mining Defined. Mining is the process of adding transaction records to the digital 
        currency’s public ledger of past transactions (and a “mining rig” is a colloquial metaphor for a single computer 
        system that performs the necessary computations for “mining”). This ledger of past transactions is called the 
        blockchain as it is a chain of blocks. The blockchain serves to confirm transactions to the rest of the network 
        as having taken place. Digital currency nodes use the blockchain to distinguish legitimate digital currency 
        transactions from attempts to re-spend coins that have already been spent elsewhere. Mining is intentionally 
        designed to be resource-intensive and difficult so that the number of blocks found each day miners remains 
        steady. Individual blocks must contain a proof of work to be considered valid. This proof of work is verified by 
        other digital currency nodes each time they receive a block. The primary purpose of mining is to allow digital 
        currency nodes to reach a secure, tamper-resistant consensus. Mining is also the mechanism used to introduce 
        digital currency into the system: Miners are paid any transaction fees as well as a “subsidy” of newly created 
        coins. This both serves the purpose of disseminating new coins in a decentralized manner as well as motivating 
        people to provide security for the system.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Default miners fee
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            {{ ucwords($data['name']) }} charges a flat mining fee for every sendout from your {{ ucwords($data['name']) }} Wallet to an external Bitcoin address. 
        This mining fee covers the associated miner transaction fee (as described above in Section 12) and maintenance of our secure wallet infrastructure. 
        See “<a href="https://{{ $data['name'] }}.com/support/">{{ ucwords($data['name']) }} Fees</a>” for further details. Our fees are subject to change and {{ ucwords($data['name']) }} reserves the right to adjust its pricing and fees and at any time.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        No right to cancel services or miners fees
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            If you use a Service to which a charge applies, or you initiate a transaction with a miners fee via the 
        Services, you will not be able to change your mind once you have confirmed that you wish to proceed with the 
        Service or transaction.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Discontinuance of services
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            We may, in our sole discretion and without cost to you, with or without prior notice and at any
                    time, modify or discontinue, temporarily or permanently, any portion of our Services.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Suspension or termination of services
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            We may suspend or terminate your access to the Services in our sole discretion, immediately and
                    without prior notice, and deactivate your Wallet without cost to you, including, for instance, in
                    the event that you breach any term of these Terms. In the event of termination, your access to funds
                    will depend on the reason for termination. We hold the right to retain your funds if we have
                    evidence of malicious behavior or failure to comply with the User Agreement.                            
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Acceptable use
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            <p>
                                When accessing or using the Services, you agree that you will not commit any unlawful act, and
                    that you are solely responsible for your conduct while using our Services. Without limiting the
                    generality of the foregoing, you agree that you will not:
                                </p><ol class="landing__ordered-child-list">
                                    <li>
                                        Use our Services in any manner that could interfere with, disrupt, negatively affect or
                    inhibit other users from fully enjoying our Services, or that could damage, disable, overburden or
                    impair the functioning of our Services in any manner;
                                    </li>
                                    <li>
                                        Use our Services to pay for, support or otherwise engage in any illegal activities,
                    including, but not limited to illegal gambling, fraud, money laundering, or terrorist
                    activities;
                                    </li>
                                    <li>
                                        Use any robot, spider, crawler, scraper or other automated means or interface not provided
                    by us to access our Services or to extract data;
                                    </li>
                                    <li>
                                        Use or attempt to use another user’s Wallet without authorization;
                                    </li>
                                    <li>
                                        Attempt to circumvent any content filtering techniques we employ, or attempt to access any
                    service or area of our Services that you are not authorized to access;
                                    </li>
                                    <li>
                                        Introduce to the Services any virus, Trojan, worms, logic bombs or other harmful
                    material;
                                    </li>
                                    <li>
                                        Develop any third-party applications that interact with our Services without our prior
                    written consent;
                                    </li>
                                    <li>
                                        Provide false, inaccurate, or misleading information; or
                                    </li>
                                    <li>
                                        Encourage or induce any third party to engage in any of the activities prohibited under this
                    Section;
                                    </li>
                                </ol>
                            <p></p>
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Intellectual property rights
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            Unless otherwise indicated by us, all intellectual property rights in the Website and in any
                    content provided in connection with our Services, are the property of {{ ucwords($data['name']) }} or our licensors or
                    suppliers and are protected by applicable intellectual property laws. We do not give any implied
                    licence for the use of the contents of the Website.
                        </li>
                        <li>
                            You accept and acknowledge that the material and content contained within the Website is made
                    available for your personal, lawful, non-commercial use only and that you may only use such material
                    and content for the purpose of using the Website. You further acknowledge that any other use of
                    content from the Website is strictly prohibited and you agree not to infringe or enable others to
                    infringe our intellectual property rights.
                        </li>
                        <li>
                            You agree to retain all copyright and other proprietary notices contained in the material and
                    content within the Website on any copy you make of the material, but failing to do so shall not
                    prejudice {{ ucwords($data['name']) }}’s intellectual property rights therein.
                        </li>
                        <li>
                            You may not sell or modify the Website materials or reproduce, display, publicly perform,
                    distribute or otherwise use the materials in any way for any public or commercial purpose. Your use
                    of the materials on any other website or on a file-sharing or similar service for any purpose is
                    prohibited.
                        </li>
                        <li>
                            You may not copy any material or content contained on the Website or accessible through the
                    Website without our written permission. Any rights not expressly granted herein to use the materials
                    contained on the Website are reserved by {{ ucwords($data['name']) }} in full.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Feedback and user submissions
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            {{ ucwords($data['name']) }} is always improving its services and the Website. If you have ideas or suggestions
                    regarding improvements or additions to {{ ucwords($data['name']) }}’s Services or the Website, {{ ucwords($data['name']) }} would like to hear
                    them; however, any submission will be subject to these Terms.
                        </li>
                        <li>
                            Under no circumstances will any disclosure of any idea or feedback, or any related material to
                    {{ ucwords($data['name']) }} or any of its subsidiaries, parents or affiliated companies, or any of their officers,
                    directors, managers, members, shareholders, employees and agents, or any of their heirs, successors,
                    representatives and assigns (each a ‘{{ ucwords($data['name']) }} Party’ and collectively, the ‘{{ ucwords($data['name']) }} Parties’) be
                    subject to any obligation of confidentiality or expectation of compensation.
                        </li>
                        <li>
                            By submitting an
                    idea or feedback or any related material that would be subject to intellectual property rights (the
                    “Work”) to {{ ucwords($data['name']) }} or any {{ ucwords($data['name']) }} Party, you grant to {{ ucwords($data['name']) }}, in respect of the Work submitted, a
                    non-exclusive, perpetual, worldwide royalty free licence to use all of the content of such ideas and
                    feedback, for any purpose whatsoever. Further, you are waiving any moral rights to the fullest
                    extent permitted under Nigeria law that you may have in the Work and are representing and
                    warranting to such {{ ucwords($data['name']) }} Party that the Work are wholly original with you, that no one else has any
                    rights in the Work and that all {{ ucwords($data['name']) }} Parties are free of any royalty to implement the Work and to
                    use the related material if so desired, as provided or as modified by any {{ ucwords($data['name']) }} Party, without
                    obtaining permission or licence from any third party.
                        </li>
                        <li>
                            You further accept that {{ ucwords($data['name']) }} may sub-licence any of the {{ ucwords($data['name']) }} Parties to use in any way any
                    Work and material you have submitted.
                        </li>
                        <li>
                            We have the right to remove any posting you may make to the Website, in our absolute
                    discretion, without warning or reasons.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        How to contact us
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            {{ ucwords($data['name']) }} offers 24/7 support through live chat on <a href="https://{{ $data['name'] }}.com" target="_blank">{{ $data['name'] }}.com</a>. You may also email <a href="mailto:help&#64;{{ $data['name'] }}.com">help&#64;{{ $data['name'] }}.com</a>.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Force majeure
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            If by reason of any Force Majeure Event, either you or {{ ucwords($data['name']) }} is delayed or prevented from complying with any of these Terms, then such delay or non-compliance shall not be deemed to be a breach of these Terms and no loss or damage shall be claimed by you or {{ ucwords($data['name']) }} by reason thereof.
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="landing__ordered-list-header">
                        Nature of agreement
                    </h3>
                    <ol class="landing__ordered-child-list">
                        <li>
                            These Terms constitute the entire agreement between you and {{ ucwords($data['name']) }} with respect to the subject
                    matter of these Terms and these Terms cancel and supersede any prior understandings and agreements
                    between you and {{ ucwords($data['name']) }} as to that subject matter. You may not assign any of your rights or
                    obligations under these Terms without our prior written consent.          
                        </li>
                    </ol>
                </li>
            </ol>
      
          </div>
         

          @include('crypterionhomepage::partials.pagemenu') 


        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>


@endsection