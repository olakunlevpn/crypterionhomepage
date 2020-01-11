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
              Privacy & Policies
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-md-0">
              Updated {{ $data['content-updated'] }}
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


  <h3 id="general">General</h3>
  <p>{{ ucwords($data['name']) }}. and its affiliates (hereinafter, "{{ ucwords($data['name']) }}", "we", "us" or "our") are committed to protecting and respecting your privacy.</p>
  <p>This Privacy Policy (together with our <a href="https://{{ ucwords($data['name']) }}.com/page/terms">Terms of Use</a>) governs our collection, processing and use of our Users' and visitors of our Sites' Personal Information.</p>
  <p>Please find below some basic definitions which may help you to understand this Privacy Policy:</p>
  <ul>
  <li><strong>{{ ucwords($data['name']) }}.COM affiliates</strong>: subsidiaries, parent companies, and companies under common control.</li>
  <li><strong>Personal Information (personal data)</strong>: any information which identifies you personally or which may help us to identify you (e.g. your name, address, e-mail address, trades etc.).</li>
  <li><strong>Data subject</strong>: an identified or identifiable person (our User).</li>
  <li><strong>Data controller</strong>: a company which determines purposes and means of personal data processing.</li>
  <li><strong>Data processor</strong>: a company which processes personal data on behalf and upon instructions of the Data controller.</li>
  <li><strong>Our Sites</strong>: websites with the following domains such as <a href="https://{{ ucwords($data['name']) }}.com/">{{ ucwords($data['name']) }}</a> - our Platform used for providing our services to you and <a href="https://{{ $data['name'] }}.com/">{{ $data['name'] }}.com</a> that is used for the purposes of informing our Users/Site visitors on our promotional, marketing campaigns and special offers.</li>
  <li><strong>Personal data processing</strong>: any operation or set of operations performed on personal data (e.g., collection, storage, use, disclosure erasure).</li>
  </ul>
  <p>Other capitalized terms, not defined above, have the meanings as defined in the <a href="https://{{ ucwords($data['name']) }}.com/page/terms">Terms of Use</a> and the applicable data protection legislation (namely, the General Data Protection Regulation 2016/679 as of April 27, 2016).</p>
  <p>The purpose of this Privacy Policy is to inform you of:</p>
  <ol>
  <li>who is {{ ucwords($data['name']) }} and how you may contact us;</li>
  <li>the kinds of Personal Information which we may collect about you, the reasons for collecting this information, how it may be used and for how long we will keep it;</li>
  <li>our use of information regarding IP addresses and our use of cookies;</li>
  <li>disclosure of Personal Information to third parties;</li>
  <li>information on international data transfer;</li>
  <li>your ability to access, correct, update, restrict use, ask us to transfer and/or delete your Personal Information;</li>
  <li>the extent of automated decision-making or profiling that we carry out using your Personal Information;</li>
  <li>the security measures we have in place to prevent the loss, misuse, or alteration of Personal Information under our control, and</li>
  <li>your rights to lodge a complaint.</li>
  </ol>
  <h3 id="who-is-cex-io">Who is {{ ucwords($data['name']) }}</h3>
  <p>{{ ucwords($data['name']) }} a company of Maylancer IT (NG) Limited An ICT company registered by corporate affairs commission of Nigeria (CAC) with Registration Code RC: 1566097. Our registered office is at Eleyele-Eruwa Road, Adetokun, Eleyele, Ibadan, Nigeria.</p>
  <p>Established in 2017 as the first cloud mining provider, {{ ucwords($data['name']) }} has become a multi-functional cryptocurrency exchange, trusted by over a million users.</p>
  <p>{{ ucwords($data['name']) }} offers cross-platform trading via website, mobile app, WebSocket and REST API, providing access to high liquidity orderbook for top currency pairs on the market. Instant cryptocurrency buying and selling is available via simplified bundle interface.</p>
  <p>The exchange has developed a multi-level account system with individual approach to each customer, from crypto beginners to institutional traders. Worldwide coverage, multiple payment options, and 24/7 support are accompanied by time-proven platform stability that guarantees safety of assets and data.</p>
  <h3 id="gathering-and-use-of-personal-information">Gathering and Use of Personal Information</h3>
  <p>We may collect your Personal Information if you use {{ ucwords($data['name']) }} and open an Account to use the Platform or perform any Transactions on the Platform. This is defined as collection for the purpose of provision of service(s) to you in accordance with our <a href="https://{{ ucwords($data['name']) }}.com/page/terms">Terms of Use</a>. Please note that if you refuse to share your Personal Information for this purpose we will not be able to provide our services to you.</p>
  <p>The types of Personal Information which we collect may include:</p>
  <ol>
  <li>your name;</li>
  <li>your photographic identification;</li>
  <li>details from your identity documents (such as driver license, passport), number of the document, date of issue and expiration, photographic identification, address etc.;</li>
  <li>your address;</li>
  <li>your phone number;</li>
  <li>your e-mail address;</li>
  <li>your IP address, Browser and Operating System information, geolocation details;</li>
  <li>your banking details including account numbers and payment card data;</li>
  <li>your date of birth;</li>
  <li>your employment details;</li>
  <li>your trades; and</li>
  <li>information on sources of your funds; and</li>
  <li>video footage identifying you.</li>
  </ol>
  <p>We will process your Personal Information only for the purpose(s) of providing to you the service(s) that you ask us to provide you, to satisfy the legal obligations stemming from regulatory obligations that arise from providing you the service(s) and our legitimate interest.</p>
  <p>Based on our legal obligations and legitimate interest we may request other documents for your identity verification and the sources of your funds confirmation for the purposes of money laundering and fraud prevention. To know more about it please see our <a href="https://{{ ucwords($data['name']) }}/page/aml-kyc">AML/KYC</a> and <a href="https://{{ ucwords($data['name']) }}/page/anti-fraud-policy">Anti-Fraud</a> policies.</p>
  <p>We may use your Personal Information for the following purposes:</p>
  <ol>
  <li>to allow you to open and operate an Account on the Platform;</li>
  <li>to enable you to complete Transactions on the Platform;</li>
  <li>if you contact us, to reply to your queries;</li>
  <li>to contact you <em>via</em> email or calls;</li>
  <li>to ensure security of your Account (for instance, if you make a request to <a href="https://support.{{ $data['name'] }}.com">disable 2-factor authentication</a> on your account we can ask you to provide additional Personal Information to confirm your identity);</li>
  <li>to analyse use of our Sites;</li>
  <li>as required for regulatory purposes such as Tax, prevention of Money Laundering, prevention of Fraud, adherence to Company statistical reporting obligations etc.;</li>
  <li>to provide you with information about products and promotions that may be of interest to you, from ourselves and third parties, although only if you have specifically agreed to receive such information;</li>
  <li>for market research e.g. surveying our Users' needs and opinions on issues, such as our performance etc. Unless consented, your data for this purpose would be anonymised.</li>
  </ol>
  <h3 id="children-s-personal-data">Children's personal data</h3>
  <p>Please note that our services are exclusively offered to individuals at least 18 years old. We do not process any Personal Information of children under this age.</p>
  <h3 id="ip-addresses">IP Addresses</h3>
  <p>We may collect information about your computer, including where available your IP address, operating system and browser type, for system administration and to report aggregate information to our advertisers. This is statistical data about our users' browsing actions and patterns and will not be used to identify any individual unless that same individual.</p>
  <h3 id="cookies">Cookies</h3>
  <p>We use a browser feature known as a "cookie", which assigns a unique identification to your computer. Cookies are typically stored on your computer's hard drive. Information collected from cookies is used by us to evaluate the effectiveness of our Sites, analyse trends, and administer the Platform. The information collected from cookies allows us to determine such things as which parts of our Sites are most visited and difficulties our visitors may experience in accessing our Sites. With this knowledge, we can improve the quality of your experience on the Platform by recognising and delivering more of the most desired features and information, as well as by resolving access difficulties. We also use cookies and/or a technology known as web bugs or clear gifs, which are typically stored in emails to help us confirm your receipt of, and response to, our emails and to provide you with a more personalised experience when using our Sites.</p>
  <p>We use third party service provider(s), to assist us in better understanding the use of our Sites. Our service provider(s) will place cookies on the hard drive of your computer and will receive information that we select that will educate us on such things as how visitors navigate around our Sites, what products are browsed, and general Transaction information. Our service provider(s) analyses this information and provides us with aggregate reports. The information and analysis provided by our service provider(s) will be used to assist us in better understanding our visitors' interests in our Sites and how to better serve those interests. The information collected by our service provider(s) may be linked to and combined with information that we collect about you while you are using the Platform. Our service provider(s) is/are contractually restricted from using information they receive from our Sites other than to assist us.</p>
  <p>You may control the cookies through the browser settings. Find out how to manage cookies on browsers:</p>
  <ul>
  <li><a href="https://support.google.com/accounts/answer/61416?co=GENIE.Platform%3DDesktop&amp;hl=en">Google Chrome</a></li>
  <li><a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences">Mozilla Firefox</a></li>
  <li><a href="https://support.microsoft.com/en-gb/help/17442/windows-internet-explorer-delete-manage-cookies">Microsoft Internet Explorer</a></li>
  <li><a href="https://help.opera.com/ru/latest/">Opera</a></li>
  <li><a href="https://support.apple.com/en-gb/safari">Apple Safari</a></li>
  </ul>
  <h3 id="disclosure-of-personal-information">Disclosure of Personal Information</h3>
  <p>We use the Personal Information for the purposes indicated at the time you provide us with such information, and/or otherwise for the purposes set out in this Privacy Policy and/or as otherwise permitted by law.</p>
  <p>We may make available the Personal Information that you provide to us for the limited purpose indicated for and during the provision of the service that you would have requested in particular to:</p>
  <ul>
  <li>our affiliates, agents and representatives;</li>
  <li>payment service providers and financial institutions;</li>
  <li>customer communications platforms;</li>
  <li>our contractors providing software for identity verification purposes;</li>
  <li>our contractors providing us information on sanctions lists from publicly accessible sources.</li>
  </ul>
  <p>We may also share Users’ Personal Information with financial institutions, insurance companies or other companies in the case of a merger, divestiture, or other corporate re-organisation and notify you of such sharing of your information to be able to exercise any of your rights where applicable.</p>
  <p>We may also share Users' Personal Information with law enforcement or regulatory agencies, as may be required by law. In certain cases, we may not be able to inform you of such sharing of data due to legal restrictions.</p>
  <p>Any third party which receives or has access to Personal Information shall be required by us to protect such Personal Information and to use it only to carry out the services they are performing for you or for {{ ucwords($data['name']) }}, unless otherwise required or permitted by law. Such a third party, except for regulatory authorities, would be contractually bound to adhere to the same security and confidentiality policies as {{ ucwords($data['name']) }} and assume the same responsibilities as {{ ucwords($data['name']) }}.</p>
  <p>The legitimate exercise of any of your rights with {{ ucwords($data['name']) }} will also be notified to be applied by any such third parties having been given access to your Personal Information.</p>
  <p>We will ensure that any such third party is aware of our obligations under this Privacy Policy and we will enter into contracts with such third parties by which they are bound by terms no less protective of any Personal Information disclosed to them than the obligations we undertake to you under this Privacy Policy or which are imposed on us under applicable data protection laws.</p>
  <h3 id="international-data-transfers">International data transfers</h3>
  <p>Our contractors and affiliates are situated at different locations (including countries located outside the EU) and we sometimes need to transfer your personal data to third countries to provide our services to you. We strive to ensure adequate level of your personal data protection wherever our contractor is located. Be sure we may transfer your Personal Information only in the following cases:</p>
  <ul>
  <li>if the country where we transfer your Personal Information to provides the adequate level of personal data protection (based on the relevant decision of European Commission (you may click <a href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/adequacy-protection-personal-data-non-eu-countries_en">here</a> to see the list of such countries);</li>
  <li>if we take appropriate safeguards to ensure that your rights as data subject are protected;</li>
  <li>if any derogations for specific situations apply (for instance, if is such transfer is necessary for the establishment, exercise or defence of legal claims or for important reason of public interest).</li>
  </ul>
  <h3 id="your-rights">Your rights</h3>
  <p>You have the right to access your Personal Information and to require the correction, updating and blocking of inaccurate and/or incorrect data by sending an email to us at <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ ucwords($data['name']) }}.com</a> or where possible, you can do these actions in your account profile page yourself.</p>
  <p>Upon your written request at <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ ucwords($data['name']) }}.com</a>, we will inform you of the Personal Information relating to you that we hold and the use and general disclosure of your Personal Information. We will also give you a copy of the Personal Information we have retained. There may be a minimal charge for providing you additional copies of your Personal Information to cover administrative costs.</p>
  <p>You may also request the erasure of both the Account and Personal Information by sending an email to us at: <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ $data['name'] }}.com</a>. {{ ucwords($data['name']) }} will action your request, unless we have a legal or regulatory obligation or overriding legitimate interest to store your Personal Information (for instance, in cases you have performed transactions).</p>
  <p>You have the right to ask us to rectify information you think is inaccurate. You also have the right to ask us to complete information you think is incomplete. Moreover, you have the right to restrict and object to the processing of your personal data in certain circumstances.</p>
  <p>You may also ask us to transfer your Personal Information to another controller of your choice.</p>
  <p>To ensure the confidentiality, integrity and availability of your information to yourself, we may request you to confirm your identity by providing identification documentation and/or other methods prior to assisting you in exercising any of your rights.</p>
  <p>If you refuse to prove your identity, we may decline to take actions in respect of your data, save restricting processing, until we can ensure that such actions are the true wish of the data subject.</p>
  <p>In the carrying out of our services we may use automated processing and profiling to reduce the risks of fraud, money laundering and abuse of our services. Through this automated processing, we carry out an analysis of your identification, transactional and behavioural patterns.</p>
  <p>We may not able to provide you with some or all our services if you do not wish this automated processing to be carried out. If you feel that this processing might be detrimental to you, please contact us on <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ $data['name'] }}.com</a>, and our compliance officer will review your application.</p>
  <p>Please note, if you make a request, we have one month to respond to you.</p>
  <h3 id="security">Security</h3>
  <p>We have implemented technical and organisational security measures to ensure the confidentiality, integrity and accountability of your Personal Information and to protect your Personal Information from loss, misuse, alteration or destruction. Such measures include:</p>
  <ul>
  <li>the pseudonymisation and TLS 1.2 encryption of personal data;</li>
  <li>2-factor authentication; </li>
  <li>the access control;</li>
  <li>the ability to ensure the ongoing confidentiality, integrity, availability and resilience of our processing systems and services;</li>
  <li>the ability to restore the availability and access to personal data in a timely manner in the event of a physical or technical incident.</li>
  </ul>
  <p>Only authorised personnel of {{ ucwords($data['name']) }} have access to your Personal Information, and these personnel are required to treat the information as confidential.</p>
  <p>Where you have consented to, or we are obliged to pass on Personal Information to third parties to provide you with a requested service or in the carrying out of a regulatory or legal obligation, we will request that the same levels of technical and organisational security measure be applied through contractual arrangements, where possible.</p>
  <p>We conduct testing, assessment and evaluation of our technical and organisational measures effectiveness on a regular basis. Technical and organisational security measures in place will, from time to time, be reviewed in line with legal and technical developments.</p>
  <p>In the event of a personal data breach or the failure of the measures of protection of such information we will immediately notify you without undue delay.</p>
  <h3 id="security-capabilities-and-policy-for-transmission-of-payment-card-details">Security Capabilities and Policy for Transmission of Payment Card Details</h3>
  <p>{{ ucwords($data['name']) }} Ltd is fully compliant with PCI DSS (Level 1 Service Provider). PCI DSS (Payment Card Industry Data Security Standard) is an information security standard designated for merchants, financial institutions and payment service providers in order to ensure the safety of cardholders' data.</p>
  <p>Please note that our trusted payment service providers are PCI DSS compliant as well.</p>
  <h3 id="links">Links</h3>
  <p>There may be links from our Sites to other sites and resources provided by third parties. This Privacy Policy applies only to our Sites. Accessing those third-party sites or sources requires you to leave our Sites.</p>
  <p>We do not control those third party sites or any of the content contained therein and you agree that we are in no way responsible or liable for any of those third party sites, including, without limitation, their content, policies, failures, promotions, products, services or actions and/or any damages, losses, failures or problems caused by, related to or arising from those sites. We encourage you to review all policies, rules, terms and regulations, including the privacy policies, of each site that you visit.</p>
  <h3 id="retention-of-personal-information">Retention of Personal Information</h3>
  <p>Your information is held within our servers located within the European Union. Access to this information is provided to employees of {{ ucwords($data['name']) }} whose office may also be outside of the European Union but who adhere to the same principles of data security and processes as those within the European Union (please see the Section on International data transfers for more details).</p>
  <p>Your payment method information that you may use to effect or receive payments from {{ ucwords($data['name']) }} are passed on to a third-party payment processor(s) which is/are based in the EU and with which {{ ucwords($data['name']) }} has a contractual agreement to safeguard your rights. Unless you create an account with us and conduct transactions, we do not retain your payment method information.</p>
  <p>We will hold your Personal Information only for as long as it is necessary for the purposes described in this Privacy Policy and our own legal and regulatory requirements.</p>
  <p>In accordance with record keeping activities for Anti-Money Laundering, Tax and Company legal obligations and considering the period during which you may bring legal claims against us under the law of the United Kingdom, we will retain Personal Information for a period of six years after our User closes his or her Account and terminates legal relationships with us for six years from the end of the tax period in which the User conducts his or her last transaction.</p>
  <p>Data stored for regulatory purposes only will be protected from unnecessary processing and will be held only for the purpose of being able to provide information or access to relevant authorities.</p>
  <h3 id="disposal-of-personal-information">Disposal of Personal Information</h3>
  <p>Once we do not have any obligation to providing you with a service you requested, nor an obligation to hold Personal Information for regulatory or legal purpose, we will anonymise or dispose of your Personal Information in line with acceptable industry and security standards so that this cannot be subsequently retrieved and associated to you.</p>
  <p>Where we cannot directly remove such records, such as in archived backups, we will retain a log of which Personal Information should be removed if ever the backup data is restored.</p>
  <h3 id="marketing">Marketing</h3>
  <p>We will ask you for your consent on registration or post-registration, by providing you the ability to check marketing preferences check boxes located within your account profile page to allow us to contact you or use your Personal Information for marketing purposes. We may also notify our existing Users on our own products or services similar to those we have already provided based on our legitimate interest.</p>
  <p>You have the right to retract the consent for us to process your Personal Information for marketing purposes. You can exercise your right to prevent such processing by unchecking marketing preferences check boxes on your account profile or by contacting us at any time on <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ ucwords($data['name']) }}.com</a></p>

  <h3 id="changes">Changes</h3>
  <p>Our Sites policies, content, information, promotions, disclosures, disclaimers and features may be revised, modified, updated, and/or supplemented at any time and without prior notice at the sole and absolute discretion of {{ ucwords($data['name']) }}. If we change this Privacy Policy, will take steps to notify all users by a notice on {{ ucwords($data['name']) }}'s Site and will post the amended Privacy Policy on the {{ ucwords($data['name']) }}'s Site.</p>
  <p>If we consider that your rights may be affected by any such changes, we will request you to confirm your consideration and acceptance prior to continue our relationship with you.</p>
  <p>This current version of the Privacy Policy has last been amended on the 11 of April 2019.</p>
  <h3 id="fraud-phishing-and-email-scams-disclaimer">Fraud, Phishing and Email scams disclaimer</h3>
  <p>Please be notified that {{ ucwords($data['name']) }} is not in any partnership with entities who represent themselves as customer support agents, providing customer support services via phone and/or social media and promise to help solve your issues for money. Remember - customer support is provided only via the {{ ucwords($data['name']) }} website and is always provided free of charge.</p>
  <p>If you discovered what you believe is a fraud, phishing, or scam which impersonates {{ ucwords($data['name']) }}, please email us at <a href="mailto:webmaster&#64;{{ ucwords($data['name']) }}.com">webmaster&#64;{{ ucwords($data['name']) }}.com</a></p>
  <h3 id="contact-us">Contact Us</h3>
  <p>If you have any questions, comments, or concerns not specifically regarding our Privacy Policy and/or practices as it or they relate to the Platform, please contact us at the email address <a href="mailto:support&#64;{{ ucwords($data['name']) }}.com">support&#64;{{ ucwords($data['name']) }}.com</a></p>
  <p>You may also wish to check our Help Centre on <a href="https://support.{{ ucwords($data['name']) }}.com">https://support.{{ ucwords($data['name']) }}.com</a> for frequently asked questions where a solution may easily be found ready for you.</p>


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
