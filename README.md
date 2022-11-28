<h1 align=center>
Blockie for Laarvel
</h1>

 ## Intro

This package was built to enable anyone to launch their own crypto payment gateway using Block.io. This will enable you to connect wallets and take payments implementing a number of different multi-party patterns such as those used in Stripe Connect.

> THIS PACKAGE IS INCOMPLETE AND NOT READY FOR RELEASE YET, PLEASE FOLLOW THE REPO FOR UPDATES

 ## Legal (Important)

DISCLAIMER: This package is not designed to replace stripe, merely provider a flexible crypto alternative. Once Stripe make crypto available on wide release, I recommend migrating to that.

Every wallet generated and coin received is technically under your ownership until externally transferred (as you hold the private keys). Due to this fact that you are handling customer funds, you are considered a financial institution, and as such should observe and obey any laws relevant to the country of which your customers reside.

This package only provides logical and useful interfaces for payment processing, there are many other facets to a payment gateway that you should be developing and implementing yourself in order to remain compliant with any relevant laws. Such features include:

- Two-Factor Authentication
- Mnemonic passwords
- Private keys
- KYC verification (Stripe ID Verification or Jumio recommended)
- API Access Control (Laravel Passport recommended)

## Setup



## License

Please refer to [LICENSE.md](https://github.com/Lanos/laravel-blockie/blob/main/LICENSE) for this project's license. 