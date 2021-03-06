name=$1
mkdir -v -p /vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/$name/WinCP
#cp -R -f /vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/Default/WinCP/* /vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/$name/WinCP

txt='
.encoding = "windows-1252"
config.version = "8"
virtualHW.version = "13"
mks.enable3d = "TRUE"
pciBridge0.present = "TRUE"
pciBridge4.present = "TRUE"
pciBridge4.virtualDev = "pcieRootPort"
pciBridge4.functions = "8"
pciBridge5.present = "TRUE"
pciBridge5.virtualDev = "pcieRootPort"
pciBridge5.functions = "8"
pciBridge6.present = "TRUE"
pciBridge6.virtualDev = "pcieRootPort"
pciBridge6.functions = "8"
pciBridge7.present = "TRUE"
pciBridge7.virtualDev = "pcieRootPort"
pciBridge7.functions = "8"
vmci0.present = "TRUE"
hpet0.present = "TRUE"
nvram = "WinCP.nvram"
virtualHW.productCompatibility = "hosted"
powerType.powerOff = "soft"
powerType.powerOn = "soft"
powerType.suspend = "soft"
powerType.reset = "soft"

usb.vbluetooth.startConnected = "TRUE"
firmware = "efi"
sensor.location = "pass-through"
guestOS = "windows9-64"
tools.syncTime = "FALSE"
sound.autoDetect = "TRUE"
sound.virtualDev = "hdaudio"
sound.fileName = "-1"
sound.present = "TRUE"
memsize = "4096"
mem.hotadd = "TRUE"
sata0.present = "TRUE"
sata0:0.fileName = "WinCP.vmdk"
sata0:0.present = "TRUE"
sata0:1.deviceType = "cdrom-image"
sata0:1.present = "TRUE"
usb.present = "TRUE"
ehci.present = "TRUE"
usb_xhci.present = "TRUE"
svga.graphicsMemoryKB = "1048576"
ethernet0.addressType = "generated"
ethernet0.virtualDev = "e1000e"
serial0.fileType = "thinprint"
serial0.fileName = "thinprint"
ethernet0.present = "TRUE"
serial0.present = "TRUE"
extendedConfigFile = "WinCP.vmxf"
floppy0.present = "FALSE"
numa.autosize.cookie = "10001"
numa.autosize.vcpu.maxPerVirtualNode = "1"
sata0:0.redo = ""
pciBridge0.pciSlotNumber = "17"
pciBridge4.pciSlotNumber = "21"
pciBridge5.pciSlotNumber = "22"
pciBridge6.pciSlotNumber = "23"
pciBridge7.pciSlotNumber = "24"
usb.pciSlotNumber = "32"
ethernet0.pciSlotNumber = "160"
sound.pciSlotNumber = "33"
ehci.pciSlotNumber = "34"
usb_xhci.pciSlotNumber = "192"
vmci0.pciSlotNumber = "35"
sata0.pciSlotNumber = "36"
svga.vramSize = "134217728"
vmotion.checkpointFBSize = "4194304"
vmotion.checkpointSVGAPrimarySize = "134217728"

ethernet0.generatedAddressOffset = "0"
monitor.phys_bits_used = "43"
cleanShutdown = "FALSE"
softPowerOff = "FALSE"
tools.upgrade.policy = "useGlobal"
sata0:1.startConnected = "TRUE"
toolsInstallManager.lastInstallError = "0"
svga.guestBackedPrimaryAware = "TRUE"
tools.remindInstall = "FALSE"
toolsInstallManager.updateCounter = "1"
guestOS.detailed.data = ""

usb_xhci:4.present = "TRUE"
usb_xhci:4.deviceType = "hid"
usb_xhci:4.port = "4"
usb_xhci:4.parent = "-1"
sata0:1.fileName = ""
unity.wasCapable = "TRUE"

'


echo "$txt" > vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/$name/WinCP/WinCP.vmx
echo displayName = \"$name\" >> vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/$name/WinCP/WinCP.vmx
vim-cmd solo/registervm vmfs/volumes/5fd9bc8d-eae87edf-e796-a0481cb8188c/$name/WinCP/WinCP.vmx

