<?= $this->extend('template/main');?>
<?= $this->section('content');?>
<style>
        #cover-spin {
    position:fixed;
    width:100%;
    left:0;right:0;top:0;bottom:0;
    background-color: rgba(255,255,255,0.7);
    z-index:9999;
    display:none;
}
.ql-container{
    max-height: 120px;
}
#cover-spin.show{
    display: flex!important;
    align-items: center;
    justify-content: center;
    padding-top: 36px;
}

#cover-spin::after {
    content:'';
    display:block;
    position:absolute;
    left:48%;top:40%;
    width:40px;height:40px;
    border-style:solid;
    border-color:black;
    border-top-color:transparent;
    border-width: 4px;
    border-radius:50%;
    -webkit-animation: spin .8s linear infinite;
    animation: spin .8s linear infinite;
}

</style>

<div id='cover-spin'>
Generating Content ....
</div>
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>	
                <li class="breadcrumb-item"><a href="<?php echo base_url('manage/posts'); ?>">All Posts</a></li>								
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $title; ?>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->

    <!--Row-->
    <div class="row row-sm mx-auto">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-12 box-shadow border">    
            
                    <div class="row py-2">
                        <div class="col-10">

                        </div>
                        <div class="col-2">
                        <button id="tutorialButton" class="ml-5 btn btn-success btn-sm" data-toggle="modal" data-target="#tutorialModal">Content Bot Tutorial</button>
                        </div>
                    </div>
                    <!-- Tutorial Button -->
    

<!-- Tutorial Modal -->
<div class="modal fade" id="tutorialModal" tabindex="-1" role="dialog" aria-labelledby="tutorialModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tutorialModalLabel">Generate API Key</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-weight:700;">To use the Bot, you need to generate an API key:</p>
                <ol>
                    <li>Sign up or log in to your <a href="https://platform.openai.com/signup" target="_blank">OpenAI account</a>.</li>
                    <li>Navigate to the API section in your account dashboard.</li>
                    <li>Generate a new API key or use an existing one.</li>
                    <li>Copy the API key and paste it into your env file or contact to Admin for support.</li>
                </ol>
                <h5 class="alert-heading">How to Use:</h5>
    <p>Enter a title in the field above and click on the "Generate Content" button. The bot will then generate content related to the entered title.</p>
    <hr>
    <p class="mb-0">Example: If you enter "Artificial Intelligence", the bot will generate content about artificial intelligence.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<form id="AddPost" class="mt-3" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Title <span class="text-danger">*</span></lable>                                                   
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>

                        <div class="mt-2 mb-3">
                            <a id="generateContentBtn" class="btn btn-primary btn-sm text-white">Generate Content</a>
                        </div>

    

                        
                        <div class="card mt-2 mb-3 text-white" style="display: block;">
                            <div class="card-header bg-success text-center">
                                Generated Content
                                <button id="copyContentButton" class="btn btn-secondary  btn-sm float-right">Copy</button>
                            </div>
                            <div id="responseBox" class="card-body response-box text-dark" style="background-color: rgb(235 231 182) !important;">
                                <blockquote class="blockquote mb-0">
                                
                                </blockquote>
                            </div>
                         
                        </div>

                    

                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Slug (If empty, it will be automatically generated)</lable>                                                   
                                <input type="text" name="slug" class="form-control" id="slug">  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Image <span class="text-danger">* (1080*1080)</span></lable>
                                <input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control" name="postUpdatesImg" id="postUpdatesImg" />
                            </div>
                            <img src="" class="post-update-img w-50"/> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Status <span class="text-danger">*</span></lable>                                                   
                                <select class="form-control" id="status" name="status" onchange="toggleScheduleField()" required> 
                                	
                                    <option value="">select status</option>	
                                    <option value="draft">Draft</option>												
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Featured <span class="text-danger"></span>(Featured Posts would be shown on home page.)</lable>                                                   	
                                <select class="form-control" id="featured" name="featured" required> 												
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                <select>     
                            </div>
                        </div>

                        <div class="col-md-6" id="scheduleField" style="display: none;">
                            <div class="form-group">
                                <label>Schedule Post Time</label>
                                <input type="datetime-local" class="form-control" id="scheduleTime" name="scheduleTime" min="<?php echo date('Y-m-d\TH:i'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Text on Image</label>
                                <input type="text" class="form-control" name="text_on_image" id="text_on_image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="specifications" id="specifications">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price Info </label>
                                <input type="text" class="form-control" name="price_info" id="price_info">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Key Point </label>
                                <input type="text" class="form-control" name="key_point" id="key_point">
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <lable>Description</lable>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="mt-2 mb-3">
                        <button class="btn btn-primary btn-sm">Post Now</button>
                    </div>
                </form>                   
            </div>									
        </div>  
    </div>
</div>


<!-- Bootstrap Modal -->
<div class="modal fade" id="copySuccessModal" tabindex="-1" role="dialog" aria-labelledby="copySuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="copySuccessModalLabel">Content Copied!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The content has been successfully copied to the clipboard.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection();?>

<?= $this->section('script');?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('generateContentBtn').addEventListener('click', function() {
            $("#cover-spin").addClass("show");
            // Fetch title entered by the user
            var title = document.getElementById('title').value;
            // Make sure title is not empty
            if (title.trim() !== '') {
                // Construct API request to generate content based on the title
                var requestOptions = {
                    method: 'POST',
                    headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer <?php echo getenv('OPEN_API_KEY'); ?>'
                        },

                    body: JSON.stringify({ messages: [{ role: "user", content: title }], model: "gpt-3.5-turbo", max_tokens: 150 })
                };

                // Send the request to OpenAI API
                fetch('https://api.openai.com/v1/chat/completions', requestOptions)
                    .then(response => response.json())
                    .then(data => {
                        // Log the entire response to the console
                        // console.log('Response:', data);

                        // Check if data.choices is defined and not empty
                        if (data.choices && data.choices.length > 0) {
                            // Update the response box with the generated content
                            var responseBox = document.getElementById('responseBox');
                            responseBox.textContent = data.choices[0].message.content;
                            responseBox.parentNode.style.display = 'block'; // Show the box
                            $("#cover-spin").removeClass("show");
                        } else {
                            // console.log('No content generated.');
                            // Hide the response box
                            document.getElementById('responseBox').parentNode.style.display = 'none';
                        }
                    })
                    .catch(error => console.log('Error:', error));
            } else {
                alert('Please enter a title before generating content.');
            }
        });
    });


    document.getElementById("copyContentButton").addEventListener("click", function() {
        event.preventDefault();
        var generatedContent = document.getElementById("responseBox").innerText;
        
        // Copy the content to the clipboard
        copyToClipboard(generatedContent);
        
        // Show a message to the user
        alert("Content copied to clipboard!");
    });

    // Function to copy text to clipboard
    function copyToClipboard(text) {
        var dummyTextArea = document.createElement("textarea");
        document.body.appendChild(dummyTextArea);
        dummyTextArea.value = text;
        dummyTextArea.select();
        document.execCommand("copy");
        document.body.removeChild(dummyTextArea);
    }



    function toggleScheduleField() {
        var featuredSelect = document.getElementById("status");
        var scheduleField = document.getElementById("scheduleField");

        if (featuredSelect.value === "scheduled") {
            scheduleField.style.display = "block";
        } else {
            scheduleField.style.display = "none";
        }
    }

$(document).ready(function(){
    $('#posts_table').DataTable({
        responsive: true,
    });
    CKEDITOR.replace('description');
  })
</script>
<script src="<?php echo base_url('public/assets/ckeditor/ckeditor.js')?>"></script>	
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
