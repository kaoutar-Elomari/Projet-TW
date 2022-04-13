package fsac.ms3i.zinger.controller;

import fsac.ms3i.zinger.Model.Comment;
import fsac.ms3i.zinger.repository.CommentRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.http.ResponseEntity;

import java.util.Date;
import  java.util.List;
import java.util.Optional;
@Controller
public class AfficheController {

    @Autowired
    private CommentRepository ComRepo;
    @PostMapping("/commentary")
    public ResponseEntity<?> postComment(@RequestBody Comment comm){

            ComRepo.save(comm);

            return new ResponseEntity<Comment>(comm , HttpStatus.OK );
    }

}

