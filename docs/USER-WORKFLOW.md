# MarineCaddie — User workflow guide

**Audience:** a new visitor, salesperson, or teammate who must use the live website.  
**Format:** presentation-style (one topic per section).  
**Date:** August 2026.

---

## Slide 1 — Cover

| | |
|---|---|
| Product | MarineCaddie Shipping LLC website |
| Motto | Smart Caddies, Smarter Logistics! |
| Job of the site | Explain services and capture quote / information requests |
| Primary CTA | **Get Quote** |
| Ops desk | ops@marinecaddie.com · +971 50 5643375 · Deira, Dubai |

---

## Slide 2 — What this app is

This is a **public marketing and lead-capture site**, not a shipment tracker.

**It is**

- Company story (About, Mission & Vision)
- Service catalog (four pillars, many detail pages)
- Contact / global presence
- Get Quote + information request forms

**It is not (today)**

- A customer login portal
- Live tracking of cargo
- A CMS dashboard for non-technical editors

---

## Slide 3 — Login: important

**Website visitors do not log in.** Open the URL and use the site.

The header button **myCADDIE** is a placeholder for a future portal. It currently goes to `#` and **does not** open a username/password screen.

| Role | How they “enter” | What they do |
|---|---|---|
| Visitor / shipper | Browser only | Browse, contact, send quote |
| Operations | Inbox / phone | Answer submissions |
| Developer | Git + XAMPP / Hostinger | Change code and deploy |

---

## Slide 4 — Open the site

1. Production: [https://www.marinecaddie.com](https://www.marinecaddie.com)
2. Local (developers): start Apache in XAMPP, open `/MarineCaddie/public`.

You should see the home hero, services, and header: **Home · Who We Are · Our Services · Why MarineCaddie? · Contact · Get Quote**.

---

## Slide 5 — Header map

| Control | Desktop | Mobile |
|---|---|---|
| Logo | Home | Home |
| Who We Are | About + Mission & Vision | Submenu |
| Our Services | 4-column mega menu | Tap to expand / collapse |
| Why MarineCaddie? | About page, Why section | Same |
| Contact | Contact page | Contact page |
| Get Quote | Header button | Bottom of hamburger menu |
| myCADDIE | Visible, not live | Same |

---

## Slide 6 — First visit in 5 minutes

1. Read the home headline and motto.  
2. Open **Our Services** and pick a category.  
3. Open one service page (example: Ship Spares Logistics).  
4. Click **Get Quote**.  
5. Or open **Contact** for HQ, presence cards, and map.

---

## Slide 7 — Browse services

Four categories. URL pattern: `/services/{slug}`.

**Marine Logistics** — Ship Spares, Onboard Delivery, Agency, Husbandry, Crew, Port Coordination  

**Freight Forwarding** — Air, Ocean, Road, Express Courier, Hand Carry, Multimodal  

**Customs Clearance** — TP Trans-shipment, Import, Export, Duty Exemption, Consulting  

**Special Projects** — OOG, DG, Heavy Lift, Break Bulk, Project Cargo  

On a service page: intro → highlights → 4-step process → FAQs → Get Quote / related services.

---

## Slide 8 — Get Quote (open the form)

Click **Get Quote** from the header, mobile menu, or a service page.

- Backdrop click **does not** close the modal. Use **X** or **Escape**.
- Choose **I require information** (one screen) or **I require a quote** (3 steps).

---

## Slide 9 — Quote: 3 steps

| Step | Required | Optional |
|---|---|---|
| 1 Personal | Name, company, email, phone | Address |
| 2 Shipment | Service, origin, destination, cargo details | Vessel, urgency |
| 3 Review | Privacy policy tick | Extra remarks |

**Information mode:** Name*, email*, phone*, optional company/remarks, privacy tick, Send.

Promise on screen: *We will respond within one business day.*

---

## Slide 10 — Contact page

1. Banner — Contact Us  
2. Get to know us — intro copy  
3. Our presence — 16 country cards (flags + cities)  
4. Form + Visit card — HQ address, email, 24/7 hours  
5. World map — pins; tap “Click to interact” before zooming  

HQ: Unit 204–224, Al Safi Building, Tower 1, Deira, Dubai, UAE.

---

## Slide 11 — Mobile

- White header, logo left, orange menu button **far right**.  
- Open hamburger → nav links, then **Get Quote** / **myCADDIE**.  
- **Our Services:** tap the label or + to expand; tap again to collapse.

---

## Slide 12 — After submit (operations)

| Who | What happens |
|---|---|
| Visitor | Thank-you message. No account created. |
| Ops | Email at `ops@marinecaddie.com` with all fields. Reply-To is the visitor. |
| Fallback | Same payload is written to Laravel log if mail is not configured. |

Target: reply within **one business day**.

---

## Slide 13 — Internal editors (no CMS login)

Change files, then `git push`.

| Need | File |
|---|---|
| Phone, address, presence | `config/company.php` |
| Service page copy | `config/services_catalog.php` |
| Header / nav | `resources/views/partials/header.blade.php` |
| Contact page | `resources/views/pages/contact.blade.php` |
| Quote modal | `resources/views/partials/quote-modal.blade.php` |
| Quote backend | `app/Http/Controllers/QuoteController.php` |

---

## Slide 14 — Local / Hostinger (technical)

**Local**

1. Clone into `htdocs/MarineCaddie`  
2. `composer install`  
3. `.env` + `php artisan key:generate`  
4. Apache on → `/public`

**Hostinger**

1. `APP_URL` and `ASSET_URL` = live `https://…` (never localhost)  
2. Document root = **`public/`**  
3. `git pull` then `php artisan config:clear` and `view:clear`

---

## Slide 15 — New-user checklist

- [ ] Opened the site without logging in  
- [ ] Found phone and email  
- [ ] Opened one service detail page  
- [ ] Tried Information **or** Quote flow  
- [ ] On phone: hamburger + Services accordion + Get Quote  
- [ ] Understood **myCADDIE is not a live login**  

**Questions:** ops@marinecaddie.com
