# noinspection SqlNoDataSourceInspectionForFile
# noinspection SqlResolveForFile
INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `brand`) VALUES
  (3, 'Modem ADSL Wi-FI', 'modem',
   'Fast and wireless navigation With ADSL modem, using the Wi-Fi interface or through the four Ethernet ports. With
    the ADSL modem you will: Browse faster through technology Wi-Fi wireless and better network coverage Wi-Fi in your
    home; Be protected: WPA and WPA2 encryption prevents unauthorized access to the Wi-Fi network. Also available
    advanced features such as MAC address filtering and the integrated firewall; Have the whole family connected:
    connect all PCs, smartphones and tablets to the new ADSL Wi-Fi modem and also share printers and hard disk connected
    to the USB port of the modem; Have no installation problems: the modem will automatically configure itself on your
    ADSL line, without installing software; Save on electricity bills : the new modem, compared to a previous generation
    product Telecom Italy with the same functionality, saves up to 40% of electricity on an average annual use.',
   69.90, 'Tim'),

  (4, 'Modem Fibra', 'modem',
   'The Fiber Modem is the digital center of the home that allows you to navigate very high performance thanks to
   the dual-band Wi-Fi (2.4 GHz and 5 GHz.) Or alternatively using the 4 Gigabit Ethernet ports offering you the
   advantage of sharing and viewing in quickly and easily multimedia content (photos, music, videos) about Smart TV,
   Tablet, PC and Smartphone latest generation using DLNA and connecting a hard disk or a USB stick to the modem.',
   40.90, 'Tim'),

  (5, 'Wi-Fi Bridge Technicolor', 'bridge', 'With the multimedia you can: Connect to the modem via the Wi-Fi AC 5GHz a
    TV, a decoder or another apparatus; Associate it to another Connect Multimedia (TG234) and create a Wi-Fi bridge AC
    5GHz; Create a Wi-Fi network in 5 GHz AC independent of the modem (access point functionality).',
   20.90, 'Technicolor'),

  (6, 'Samsung GALAXY A3 (2016) ', 'smartphone', 'First Samsung smartphone with all-metal body, the Samsung GALAXY A3
    2016 is equipped with an ultra-slim design and an incredible display sAMOLED 4.5 "qHD. Thanks to its 4 unique
    colors, you can choose the Samsung GALAXY A3 2016 that best fits your personality and your style',
   299.90, 'Samsung'),

  (7, 'Samsung Galaxy S6 edge+ 32GB', 'smartphone', 'Inspired by the artists of the form, such as glassmakers and
    blacksmiths workshop masters, Samsung Galaxy S6 Edge is the perfect combination of finely forged materials with
    each other. The first smartphone with dual-edge display, an unprecedented revelation not only of extraordinary
    shape and shiny surfaces, but also excellent substance with a wide spectrum of more vibrant colors.',
   839.90, 'Samsung'),

  (8, 'Apple iPhone SE 16GB', 'smartphone', 'iPhone SE has two advanced cameras, high processing power and compact
    design to fit comfortably in your hand and be pleasant to the touch, thanks to the satin finish of the aluminum
    shell. iPhone SE has a 4” Retina display, A9 chip with 64-bit desktop-class, fingerprint sensor with Touch ID,
    12MP iSight camera, FaceTime HD camera, Live Photos, Wi-Fi and 4G connections. And yet, iOS 9 and iCloud.',
   520.90, 'Apple'),

  (9, 'Microsoft Lumia 550', 'smartphone', 'Live all the power of Windows 10 at an affordable price. With the 4G LTE
    connection and the new Microsoft Edge browser, you can do more, faster.', 139.90, 'Microsoft'),

  (10, 'Blackberry PRIV', 'smartphone', 'PRIV by BlackBerry features an elegant slim design with a slide out physical
    keyboard, 5.4-inch dual-curved screen, 3410 mAh battery and an 18 MP dual-flash Schneider-Kreuznach certified camera
    and an integrated messaging experience on Android. The power of BlackBerry is now on Android.',
   639.90, 'Blackberry'),

  (11, 'Motorola DROID TURBO', 'smartphone', 'Rise to the moment with Droid Turbo by Motorola. Get a turbo processor
    with 2.7 GHz speed. Keep going all day and night with Turbo charging and up to 48-hour battery life. See every
    detail with the 5.2-inch Quad HD display and 21-megapixel camera. With Ballistic Nylon, it''s as strong as it is
    quick. The Droid Turbo comes in 32GB or 64GB. Available in Black Ballistic Nylon.',
   199.90, 'Motorola');

INSERT INTO `product_feature` (`product_id`, `property`, `value`) VALUES
  (3, 'Technology', 'ADSL/ADSL2+'),
  (3, 'Wi-Fi', 'Wi-Fi 802.11 b/g/n'),
  (3, 'Transfer speed', '300Mbps'),
  (3, 'Max upload speed', '1 Mbps'),
  (3, 'Max download speed', '20 Mbps'),
  (3, 'Security', 'WPA, WPA-PSK, WEP'),
  (3, 'Interfaces', 'USB high-speed interfaces (480 Mbit / s), high power (500 mA), 1 port connector type A
     Wi-FiStandard IEEE 802.11n interface, radio interface 2.4Ghz, 2 antennas, theoretical transmission speed
     300 Mbps'),
  (3, 'Advanced functionalities', 'Advanced routing features (DHCP, NAT, NAPT, Virtual Server) - Firewall - Shared
  Hard Disk and USB Printer'),
  (3, 'Security', 'WPA, WPA-PSK, WEP'),

  (4, 'Technology', 'ADSL/ADSL2+/VDSL'),
  (4, 'Wi-Fi', 'Wi-Fi 802.11 b/g/n'),
  (4, 'Interfaces', '1-port ADSL / VDSL - 1 WAN port, 4 Gigabit Ethernet ports - 1 interface integrated Dect - 1 PSTN
    port 2 FXS ports for connecting phones - 2 USB ports for connecting drives and printers'),

  (6, 'OS', 'Android'),
  (7, 'OS', 'Android'),
  (8, 'OS', 'iOS'),
  (9, 'OS', 'Windows 8'),
  (10, 'OS', 'Android'),
  (11, 'OS', 'Android'),

  (6, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),
  (7, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),
  (8, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),
  (9, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),
  (10, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),
  (11, 'Size', '132 / 134,5 x 65,2 x7,3 mm'),

  (6, 'Battery', '2360 mAh'),
  (7, 'Battery', '2400 mAh'),
  (8, 'Battery', '2800 mAh'),
  (9, 'Battery', '2200 mAh'),
  (10, 'Battery', '1300 mAh'),
  (11, 'Battery', '4300 mAh'),

  (6, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),
  (7, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),
  (8, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),
  (9, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),
  (10, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),
  (11, 'Connectivity', 'USB 2.0 / Bluetooth 4.1 Low Energy - Wi-Fi 802.11 b/g/n 2.4GHz - A-GPS + GLONASS - Router Wi-Fi / Wi-Fi Direct - NFC - 3,5 mm headphone jack'),

  (6, 'Camera', '13 Mpx AF with LED Flash, Digital Zoom 4x - 5 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),
  (7, 'Camera', '15 Mpx AF with LED Flash, Digital Zoom 4x - 5.1 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),
  (8, 'Camera', '14.2 Mpx AF with LED Flash, Digital Zoom 4x - 5.4 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),
  (9, 'Camera', '13.1 Mpx AF with LED Flash, Digital Zoom 4x - 5.1 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),
  (10, 'Camera', '18 Mpx AF with LED Flash, Digital Zoom 4x - 5.6 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),
  (11, 'Camera', '11 Mpx AF with LED Flash, Digital Zoom 4x - 5.2 Mpx, F1.9 (front camera) - Pro mode, Autocapture, Panoramic, Multicapture, HDR, Night mode - Photo resolutions: 4128x3096, 4128x2322, 3096x3096, 3264x2448, 3264x1836, 2048x1152 - Video resolution: 1920x1080, 1280x720, 640x480'),

  (6, 'Display', 'HD Touchscreen SuperAMOLED 4.7’’ - 720x1280'),
  (7, 'Display', 'HD Touchscreen SuperAMOLED 4.7’’ - 720x1280'),
  (8, 'Display', 'Retina display 4.7’’ - 720x1280'),
  (9, 'Display', 'HD Touchscreen LED 4.7’’ - 720x1280'),
  (10, 'Display', 'HD Touchscreen LED 4.7’’ - 720x1280'),
  (11, 'Display', 'HD Touchscreen SuperAMOLED 4.7’’ - 720x1280')
;

