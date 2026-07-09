# Team CURE

Website for Team CURE (Team Cure Sports / Team CURE Foundation), a nonprofit organization. The site is a set of static PHP pages styled with Tailwind CSS (via CDN).

## Pages

| File | Description |
|---|---|
| `index.php` | Home page |
| `about-us.php` | About the organization and its mission |
| `become-a-sponsor.php` | Sponsorship info and sign-up |
| `corprate-sponsors.php` | Corporate sponsors listing |
| `donate.php` | Donation page |
| `shop.php` | Merchandise shop |
| `photo-gallary.php` | Photo gallery |
| `gallery-events.php` | Event gallery |
| `testimonials.php` | Redirects to `about-us.php` |
| `footer.php` | Shared footer, included across pages |

## Assets

Images, logos, and merchandise photos live in [assets/](assets/), including subfolders for `gallery/`, `golf/`, and `sponsors/`.

## Stack

- PHP (static pages, minimal server-side logic)
- [Tailwind CSS](https://tailwindcss.com/) via CDN
- Custom theme colors: `cure-pink` (`#FF69B4`) and `cure-pink-dark` (`#FF1493`)

## Running locally

Serve the directory with any PHP-capable web server, e.g.:

```
php -S localhost:8000
```

Then open `http://localhost:8000/index.php` in a browser.
