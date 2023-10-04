@extends('frontend.layouts.master')
@section('title', 'Add Place')
@section('content')

    <main class="site-main listing-main">
        <div class="listing-nav">
            <div class="listing-menu nav-scroll">
                <ul>
                    <li class="active">
                        <a href="#genaral" title="Genaral">
                            <span class="icon">
                                <i class="la la-cog"></i>
                            </span>
                            <span>Genaral</span>
                        </a>
                    </li>
                    <li><a href="#hightlight" title="Hightlight"><span class="icon"><i
                                    class="la la-wifi"></i></span><span>Hightlight</span></a></li>
                    <li><a href="#location" title="Location"><span class="icon"><i
                                    class="la la-map-marker"></i></span><span>Location</span></a></li>
                    <li><a href="#contact" title="Contact info"><span class="icon"><i
                                    class="la la-phone"></i></span><span>Contact info</span></a></li>
                    <li><a href="#social" title="Social network"><span class="icon"><i
                                    class="la la-link"></i></span><span>Social network</span></a></li>
                    <li><a href="#open" title="Open hourses"><span class="icon"><i
                                    class="la la-business-time"></i></span><span>Open hourses</span></a></li>
                    <li><a href="#media" title="Media"><span class="icon"><i
                                    class="la la-image"></i></span><span>Media</span></a></li>
                </ul>
            </div>
        </div><!-- .listing-nav -->
        <div class="listing-content">
            <h2>Add new place</h2>
            <form action="{{ route('savePlace') }}" method="POST" class="upload-form" enctype="multipart/form-data">
                @csrf

                <div id="genaral" class="listing-box">
                    <h3>General</h3>
                    <div class="field-inline">
                        <div class="field-group field-input">
                            <label for="businessName">Business Name</label>
                            <input type="text" placeholder="What is the name of the place" name="businessName"
                                id="businessName" class="form-control  ">
                            @error('businessName')
                                <div class="has-error mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field-group field-input">
                            <label for="price">Price</label>
                            <input type="text" placeholder="Price" name="price" id="price" class="form-control">
                            @error('price')
                                <div class="has-error mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field-group">
                        <label for="description">Business Description</label>
                        <textarea placeholder="Description" id="description" name="description" rows="4" cols="65"
                            class="form-control "></textarea>
                        @error('description')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="duration">Duration</label>
                        <input type="text" placeholder="Duration" id="duration" name="duration" class="form-control  ">
                        @error('duration')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field-group field-select">
                        <label for="category">Category</label>
                        <select data-placeholder="Select Category" class="chosen-select form-control  " id="category"
                            name="category">
                            <option selected></option>
                            @foreach ($category as $value)
                                <option>{{ $value->title }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field-group field-select">
                        <label for="placeType">Place Type</label>
                        <select data-placeholder="Select Place Type" multiple class="chosen-select form-control "
                            id="placeType" name="placeType[]">
                            <option disabled>Select</option>
                            @foreach ($Placetype as $value)
                                <option>{{ $value->title }}</option>
                            @endforeach
                        </select>
                        @error('placeType')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div id="hightlight" class="listing-box">
                    <h3>Highlight</h3>
                    <div class="field-group field-check">
                        @foreach ($Highlight as $value)
                            <label for="highlight_{{ $value->id }}">
                                <input type="checkbox" name="highlight[]" id="highlight_{{ $value->id }}"
                                    value="{{ $value->title }}">
                                {{ $value->title }}
                                <span class="checkmark">
                                    <i class="la la-check"></i>
                                </span>
                            </label>
                        @endforeach

                    </div>
                    @error('highlight')
                        <div class="has-error mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div id="location" class="listing-box">
                    <h3>Location</h3>
                    <div class="field-group field-select">
                        <label for="city">City</label>
                        <select data-placeholder="Select City" class="chosen-select form-control " id="city"
                            name="city">
                            <option selected></option>
                            @foreach ($City as $value)
                                <option>{{ $value->title }}</option>
                            @endforeach
                        </select>
                        @error('city')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="placeAddress">Business Address</label>
                        <input type="text" placeholder="Full Address" id="placeAddress" name="placeAddress"
                            class="form-control  ">
                        @error('placeAddress')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Additional location fields can be added here -->
                </div>

                <div id="contact" class="listing-box">
                    <h3>Contact Info</h3>
                    <div class="field-group">
                        <label for="ownerName">Owner Name</label>
                        <input type="text" placeholder="Owner Name" id="ownerName" name="ownerName"
                            class="form-control ">
                        @error('ownerName')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Your email address" id="email" name="email"
                            class="form-control ">
                        @error('email')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="phoneNumber1">Business Number </label>
                        <input type="tel" placeholder="Your phone number" name="phoneNumber1" id="phoneNumber1"
                            class="form-control ">
                        @error('phoneNumber1')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="phoneNumber2">Phone number 2 (optional)</label>
                        <input type="tel" placeholder="Your phone number" name="phoneNumber2" id="phoneNumber2">
                        @error('phoneNumber2')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="whatsappNo">Business Whatsapp</label>
                        <input type="tel" placeholder="Your WhatsApp number" name="whatsappNo" id="whatsappNo"
                            class="form-control ">
                        {{-- @error('whatsappNo')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="field-group">
                        <label for="websiteUrl">Website</label>
                        <input type="url" placeholder="Your website url" name="websiteUrl" id="websiteUrl"
                            class="form-control ">
                        @error('websiteUrl')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="additionalFields">Additional Fields</label>
                        <input type="url" placeholder="Your additional fields url" name="additionalFields"
                            id="additionalFields" class="form-control ">
                        {{-- @error('additionalFields')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div><!-- .listing-box -->

                <div id="social" class="listing-box">
                    <h3>Social Networks</h3>
                    <div class="field-group">
                        <label for="youtube">Youtube URL</label>
                        <input type="url" placeholder="Your YouTube URL" name="youtube" id="youtube"
                            class="form-control ">
                        {{-- @error('youtube')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="field-group">
                        <label for="twitter">Twitter URL</label>
                        <input type="url" placeholder="Your Twitter URL" name="twitter" id="twitter"
                            class="form-control ">
                        {{-- @error('twitter')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="field-group">
                        <label for="instagram">Instagram URL</label>
                        <input type="url" placeholder="Your Instagram URL" name="instagram" id="instagram"
                            class="form-control ">
                        {{-- @error('instagram')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="field-group">
                        <label for="facebook">Facebook URL</label>
                        <input type="url" placeholder="Your Facebook URL" name="facebook" id="facebook"
                            class="form-control ">
                        {{-- @error('facebook')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div><!-- .listing-box -->

                <div id="open" class="listing-box">
                    <h3>Opening Hours</h3>
                    <div class="field-group field-select">
                        <label for="bookingType">Booking Type</label>
                        <select data-placeholder="Select Booking Type" class="chosen-select form-control "
                            id="bookingType" name="bookingType">
                            <option selected></option>
                            @foreach ($bookingType as $value)
                                <option>{{ $value->title }}</option>
                            @endforeach
                        </select>
                        @error('bookingType')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field-group">
                        <label for="bookingurl">Booking URL</label>
                        <input type="url" placeholder="Your booking URL" name="bookingurl" id="bookingurl"
                            class="form-control ">
                        @error('bookingurl')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div><!-- .listing-box -->

                <div id="media" class="listing-box">
                    <h3>Media</h3>
                    <div class="field-group field-file">
                        <label for="coverImage">Cover image</label>
                        <label for="coverImage" class="preview">
                            <input type="file" name="coverImage" id="coverImage" class="upload-file"
                                data-max-size="1024">
                            <img class="img_preview" src="images/no-image.png" alt="" />
                            <i class="la la-cloud-upload-alt"></i>
                        </label>
                        @error('coverImage')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                        <div class="field-note">Maximum file size: 1 MB.</div>
                    </div>

                    <div class="field-group field-file">
                        <label for="galleryImage">Business Photos</label>
                        <label for="galleryImage" class="preview">
                            <div class="mb-3 upload-area" id="drop-area">
                                <label for="image" class="form-label">Drag & Drop Images Here</label>
                            </div>
                            <input type="file" name="galleryImage[]" id="galleryImage" class="upload-file"
                                data-max-size="1024" multiple accept="image/*">
                            <input type="hidden" name="galleryImageCount" id="galleryImageCount" value="0">
                            <!-- Add this hidden input -->
                            <div class="selected-files-count"></div>
                            <i class="la la-cloud-upload-alt"></i>
                        </label>
                        @error('galleryImage')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                        <div class="field-note">Maximum file size: 1 MB.</div>
                    </div>

                    <div class="field-group field-file">
                        <label for="logo">Author </label>
                        <label for="logo" class="preview">
                            <input type="file" name="logo" id="logo" class="upload-file"
                                data-max-size="1024">
                            <img class="img_preview" src="images/no-image.png" alt="" />
                            <i class="la la-cloud-upload-alt"></i>
                        </label>
                        @error('logo')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                        <div class="field-note">Maximum file size: 1 MB.</div>
                    </div>

                    <div>
                        <label for="selectField">Select an option:</label>
                        <select id="dType" name="dType" onchange="showTextBox()" class="mb-3">
                            <option value="none">Select an option</option>
                            <option value="gst">GST (optional)</option>
                            <option value="cin">CIN (optional)</option>
                        </select>

                        <div id="textBoxContainer" style="display: none;" class="mb-3">
                            <label for="textBox">Enter the details:</label>
                            <input type="text" id="dNumber" name="dNumber" placeholder="Enter GST or CIN">
                        </div>
                    </div>

                    <div class="field-group field-file">
                        <label for="documentImage">Business Ownership Proof (Upload PDF)</label>
                        <label for="documentImage" class="preview">
                            <input type="file" name="documentImage" id="documentImage" class="upload-file"
                                accept=".pdf">
                            <img class="img_preview" src="images/no-image.png" alt="" id="pdfPreview">
                            <i class="la la-cloud-upload-alt"></i>
                        </label>
                        @error('documentImage')
                            <div class="has-error mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="video">Business Video (Youtube Link)</label>
                        <input type="url" placeholder="Your video URL" name="video" id="video">

                    </div>

                </div>
                <div class="field-group field-submit">
                    <input type="submit" name="submit" value="Submit" class="btn" id="upload-btn">
                </div>
            </form>

        </div><!-- .listing-content -->
    </main><!-- .site-main -->

    <script>
        function showTextBox() {
            console.log('open Extra Filed')
            var selectField = document.getElementById("dType");
            var textBoxContainer = document.getElementById("textBoxContainer");

            if (selectField.value === "gst") {
                
                textBoxContainer.style.display = "block";
            } else if (selectField.value === "cin") {
                
                textBoxContainer.style.display = "block";
            } else {
                
                textBoxContainer.style.display = "none";
            }
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropArea = document.getElementById("drop-area");
            const galleryImageInput = document.getElementById("galleryImage");
            const galleryImageCountInput = document.getElementById("galleryImageCount");

            ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
                dropArea.addEventListener(eventName, preventDefault, false);
            });

            function preventDefault(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            dropArea.addEventListener("drop", handleDrop, false);
            galleryImageInput.addEventListener("change", updateGalleryImageCount);

            function handleDrop(e) {
                const files = e.dataTransfer.files;
                const inputElement = galleryImageInput;
                inputElement.files = files;

                // Update label text to show the number of files dropped
                const label = dropArea.querySelector("label");
                label.textContent = files.length === 1 ? "1 file selected" : `${files.length} files selected`;

                // Update the hidden input field with the count
                galleryImageCountInput.value = files.length;
            }

            function updateGalleryImageCount() {
                const files = galleryImageInput.files;
                galleryImageCountInput.value = files.length;
            }
        });
        document.getElementById('documentImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const pdfPreview = document.getElementById('pdfPreview');

            if (file && file.type === 'application/pdf') {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const pdfData = new Uint8Array(e.target.result);

                    // Initialize PDF.js
                    pdfjsLib.getDocument({
                        data: pdfData
                    }).promise.then(function(pdf) {
                        pdf.getPage(1).then(function(page) {
                            const canvas = document.createElement('canvas');
                            const context = canvas.getContext('2d');
                            const viewport = page.getViewport({
                                scale: 0.5
                            });

                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            page.render({
                                canvasContext: context,
                                viewport: viewport
                            }).promise.then(function() {
                                const imageData = canvas.toDataURL();
                                pdfPreview.src = imageData;
                            });
                        });
                    });
                };

                reader.readAsArrayBuffer(file);
            } else {
                // Handle cases where the selected file is not a PDF
                pdfPreview.src = 'images/no-image.png'; // Display a default image
            }
        });
    </script>

@endsection
