<?php
$page_title = "OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the OAuth 2.0 protocol.";

require('../includes/_header.php');
?>

<div class="container">
  <div>


    <h2 id="oauth-2.0">OAuth 2.0</h2>

    <p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the industry-standard protocol for authorization. OAuth 2.0 supersedes the work done on the original OAuth protocol created in 2006. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification and its extensions are being developed within the <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth Working Group</a>.</p>
    <p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>

    <?php if(time() < strtotime('2019-06-13')): ?>
    <iframe width="100%" height="440" src="https://www.youtube.com/embed/CHzERullHe8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <?php endif ?>


    <h3 style="clear:none;">OAuth 2.0 Core</h3>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0 Framework</a> - RFC 6749
        <ul>
          <li><a href="/2/scope/">OAuth 2.0 Scope</a></li>
        </ul>
      </li>
      <li><a href="/2/grant-types/">OAuth 2.0 Grant Types</a>
        <ul>
          <li><a href="/2/grant-types/authorization-code/">Authorization Code</a></li>
          <li><a href="/2/grant-types/implicit/">Implicit</a></li>
          <li><a href="/2/grant-types/password/">Password</a></li>
          <li><a href="/2/grant-types/client-credentials/">Client Credentials</a></li>
          <li><a href="/2/grant-types/device-code/">Device Code</a></li>
          <li><a href="/2/grant-types/refresh-token/">Refresh Token</a></li>
        </ul>
      </li>
      <li><a href="/2/bearer-tokens/">OAuth 2.0 Bearer Tokens</a> - RFC 6750</li>
      <li><a href="/2/security-considerations/">Threat Model and Security Considerations</a> - RFC 6819</li>
      <li><a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a>
    </ul>

    <h3>Mobile and Other Devices</h3>
    <ul>
      <li><a href="/2/native-apps/">Native Apps</a> - Recommendations for using OAuth 2.0 with native apps</li>
      <li><a href="/2/pkce/">PKCE</a> - Proof Key for Code Exchange, better security for native apps</li>
      <li><a href="/2/browser-based-apps/">Browser-Based Apps</a> - Recommendations for using OAuth 2.0 with browser-based apps (e.g. an SPA)</li>
      <li><a href="/2/device-flow/">OAuth 2.0 Device Flow</a></li>
    </ul>

    <h3>Token and Token Management</h3>
    <ul>
      <li><a href="/2/token-introspection/">OAuth 2.0 Token Introspection</a> - RFC 7662, to determine the active state and meta-information of a token</li>
      <li><a href="/2/token-revocation/">OAuth 2.0 Token Revocation</a> - RFC 7009, to signal that a previously obtained token is no longer needed</li>
      <li><a href="/2/jwt/">JSON Web Token</a> - RFC 7519</li>
    </ul>


    <h3>Related Specs and Extensions</h3>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc7521">OAuth Assertions Framework</a> - RFC 7521</li>
      <li><a href="http://tools.ietf.org/html/rfc7522">SAML2 Bearer Assertion</a> - RFC 7522, for integrating with existing identity systems</li>
      <li><a href="http://tools.ietf.org/html/rfc7523">JWT Bearer Assertion</a> - RFC 7523, for integrating with existing identity systems</li>
      <li><a href="https://tools.ietf.org/wg/oauth/">OAuth WG Status Pages</a></li>
      <li><a href="/webauthn/">WebAuthn - Web Authentication</a></li>
    </ul>

    <h3>Community Resources</h3>
    <ul>
      <li><a href="https://aaronparecki.com/oauth-2-simplified/">OAuth 2.0 Simplified</a></li>
      <li>
        <a href="/books/">Books about OAuth</a>
        <ul>
          <li><a href="https://oauth2simplified.com">OAuth 2.0 Simplified</a> by Aaron Parecki</li>
          <li><a href="https://www.amazon.com/OAuth-2-Action-Justin-Richer/dp/161729327X/?tag=oauthnet-20">OAuth 2 in Action</a> by Justin Richer and Antonio Sanso</li>
          <li><a href="https://www.amazon.com/Mastering-OAuth-2-0-Charles-Bihis/dp/1784395404?tag=oauthnet-20">Mastering OAuth 2.0</a> by Charles Bihis</li>
          <li><a href="https://www.amazon.com/dp/178829596X?tag=oauthnet-20">OAuth 2.0 Cookbook</a> by Adolfo Eloy Nascimento</li>
        </ul>
      </li>
      <li><a href="https://alexbilbie.com/tag/oauth/">OAuth articles by Alex Bilbie</a></li>
    </ul>

    <h3>Protocols Built on OAuth 2.0</h3>
    <ul>
      <li><a href="http://openid.net/connect/">OpenID Connect</a></li>
      <li><a href="https://docs.kantarainitiative.org/uma/rec-uma-core.html">UMA</a></li>
      <li><a href="https://indieauth.spec.indieweb.org/">IndieAuth</a></li>
    </ul>

    <h3>Code and Services</h3>
    <ul>
      <li><a href="/code/">OAuth 2.0 Code and Services</a></li>
    </ul>

    <h3>Legacy</h3>
    <p>See more information on <a href="/1/">OAuth 1.0 and 1.0a</a>.</p>

  </div>
</div>

<?php require('../includes/_footer.php'); ?>
